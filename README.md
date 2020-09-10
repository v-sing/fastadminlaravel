代码规范

A、代码规范

    1、后端的方法命名统一采用驼峰的方式

    2、全局函数只允许封装与业务无管函数，不建议过多封装全局函数

    3、尽量面向对象编程
    
    4、逻辑判断不建议超过三层
    
    5、方法封装要符合单一职责，一个方法只解决一个问题，理论上方法不允许超过80行代码，最好控制在30行以内

B、数据库规范

    1、严禁使用Db，所有数据库操作使用model
    
    2、严禁在model层里面写业务逻辑
    
    3、严禁在controller层里面直接操作数据库
    
    4、表名、字段名严格按照laravel规范
    
    5、禁止使用join语句，尽量封装关联模型
    
    6、数据库结构更改必须走迁移，为减少迁移文件数量，上线之前可以不使用新增迁移
    
    7、建议使用修改器，不建议在模板文件里处理数据
    
    8、枚举类型的数据，建议封装model常量
    
C、其他

    1、严格准守逻辑分层:model->repository->controller->view;
    
    2、统一在repository里面写业务逻辑，采用注入的方式在controller层里面调用
    
    3、如需对model进行封装，可采用traits;与业务逻辑无管的服务可以额外添加service层，直接注入到repository或controller，架构分层不可逆
    
    4、所有与环境有关的配置必须走env，config中调用env，业务中调用config。本地.env 里添加变量时 必须 同步到 .env.example 中
    
    5、必须保证测试代码与生产代码完全一致

    6、如有任务、队列、脚本等，一定要在此文档里以表格形式罗列出，说明用途，指出调用场景

    7、建议采用统一的代码格式化风格

    8、建议使用表单验证

#### 逻辑分层

![avatar](https://afw656.oss-cn-beijing.aliyuncs.com/myfile/%E6%9E%B6%E6%9E%84%E5%88%86%E5%B1%82%20%281%29.png)

#### 环境要求
- mysql 5.7 php7.4

#### 项目部署
- 安装扩展 sudo composer install 生产环境执行 composer install --no-dev
- 运行迁移 sudo php artisan migrate
- 重启队列 sudo php artisan queue:restart

#### 项目开发常用命令
1,拉取代码后，更新数据库结构
> php artisan migrate

2,拉取代码后，重建数据库并填充数据
> 

如果提示某个php artisan migrate:refresh --seed种子类找不到，需要执行
> composer dump-autoload

3,创建模型和迁移
> php artisan make:model Modules/Model/模型名 -m

4,拉取代码后，安装扩展
> composer install

5,从本地数据库生成种子,主要是基础数据表
> php artisan iseed industries表名

6,更新数据种子后提示主键重复
>php artisan command:modify

#### 项目开发调试助手（只有local环境有效）
1,在开发环境收集 dump() 函数输出，并将其打印到控制台或导出到文件,不在页面展示dump信息
> php artisan dump

2,在浏览器查看数据库执行情况
> 在浏览器安装clockwork扩展

3, Telescope调试工具
> 访问 /telescope 可查看系统的所有运行信息，具体路径根据本地配置


4,创建模型后，更新ide-help,便于代码提示
> php artisan ide-help:model
# fastadminlaravel
