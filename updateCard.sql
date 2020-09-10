update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065735';
insert into customs_c values ('00021712',(select customid from cards where cardno='6888371800000065735'));
update account set customid=(select customid from cards where cardno='6888371800000065735') where accountid='00044803        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065735') where customid='00021712';
update quancz set customid=(select customid from cards where cardno='6888371800000065735') where customid='00021712';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000052991';
insert into customs_c values ('00043650',(select customid from cards where cardno='6888371800000052991'));
update account set customid=(select customid from cards where cardno='6888371800000052991') where accountid='00088679        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000052991') where customid='00043650';
update quancz set customid=(select customid from cards where cardno='6888371800000052991') where customid='00043650';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000052892';
insert into customs_c values ('00044311',(select customid from cards where cardno='6888371800000052892'));
update account set customid=(select customid from cards where cardno='6888371800000052892') where accountid='00090001        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000052892') where customid='00044311';
update quancz set customid=(select customid from cards where cardno='6888371800000052892') where customid='00044311';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065935';
insert into customs_c values ('00046438',(select customid from cards where cardno='6888371800000065935'));
update account set customid=(select customid from cards where cardno='6888371800000065935') where accountid='10090461        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065935') where customid='00046438';
update quancz set customid=(select customid from cards where cardno='6888371800000065935') where customid='00046438';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065196';
insert into customs_c values ('00046534',(select customid from cards where cardno='6888371800000065196'));
update account set customid=(select customid from cards where cardno='6888371800000065196') where accountid='10068345        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065196') where customid='00046534';
update quancz set customid=(select customid from cards where cardno='6888371800000065196') where customid='00046534';








update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000053371';
insert into customs_c values ('00062615',(select customid from cards where cardno='6888371800000053371'));
update account set customid=(select customid from cards where cardno='6888371800000053371') where accountid='01782852        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000053371') where customid='00062615';
update quancz set customid=(select customid from cards where cardno='6888371800000053371') where customid='00062615';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065718';
insert into customs_c values ('00069023',(select customid from cards where cardno='6888371800000065718'));
update account set customid=(select customid from cards where cardno='6888371800000065718') where accountid='10090131        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065718') where customid='00069023';
update quancz set customid=(select customid from cards where cardno='6888371800000065718') where customid='00069023';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000053357';
insert into customs_c values ('00069624',(select customid from cards where cardno='6888371800000053357'));
update account set customid=(select customid from cards where cardno='6888371800000053357') where accountid='01782836        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000053357') where customid='00069624';
update quancz set customid=(select customid from cards where cardno='6888371800000053357') where customid='00069624';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371900000029569';
insert into customs_c values ('00121119',(select customid from cards where cardno='6888371900000029569'));
update account set customid=(select customid from cards where cardno='6888371900000029569') where accountid='00249126        ';
update account set customid=(select customid from cards where cardno='6888371900000029569') where accountid='00249127        ';
update account set customid=(select customid from cards where cardno='6888371900000029569') where accountid='00545905        ';
update quan_account set customid=(select customid from cards where cardno='6888371900000029569') where customid='00121119';
update quancz set customid=(select customid from cards where cardno='6888371900000029569') where customid='00121119';
delete from  account where accountid='00545944        ';
delete from  account where accountid='00545981        ';












update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065723';
insert into customs_c values ('00211688',(select customid from cards where cardno='6888371800000065723'));
update account set customid=(select customid from cards where cardno='6888371800000065723') where accountid='10090141        ';
update account set customid=(select customid from cards where cardno='6888371800000065723') where accountid='10090142        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065723') where customid='00211688';
update quancz set customid=(select customid from cards where cardno='6888371800000065723') where customid='00211688';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065110';
insert into customs_c values ('00215156',(select customid from cards where cardno='6888371800000065110'));
update account set customid=(select customid from cards where cardno='6888371800000065110') where accountid='00442236        ';
update account set customid=(select customid from cards where cardno='6888371800000065110') where accountid='00442237        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065110') where customid='00215156';
update quancz set customid=(select customid from cards where cardno='6888371800000065110') where customid='00215156';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065611';
insert into customs_c values ('00228833',(select customid from cards where cardno='6888371800000065611'));
update account set customid=(select customid from cards where cardno='6888371800000065611') where accountid='10089983        ';
update account set customid=(select customid from cards where cardno='6888371800000065611') where accountid='10089984        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065611') where customid='00228833';
update quancz set customid=(select customid from cards where cardno='6888371800000065611') where customid='00228833';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065261';
insert into customs_c values ('00235400',(select customid from cards where cardno='6888371800000065261'));
update account set customid=(select customid from cards where cardno='6888371800000065261') where accountid='00482755        ';
update account set customid=(select customid from cards where cardno='6888371800000065261') where accountid='00482756        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065261') where customid='00235400';
update quancz set customid=(select customid from cards where cardno='6888371800000065261') where customid='00235400';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065256';
insert into customs_c values ('00235880',(select customid from cards where cardno='6888371800000065256'));
update account set customid=(select customid from cards where cardno='6888371800000065256') where accountid='10068441        ';
update account set customid=(select customid from cards where cardno='6888371800000065256') where accountid='10068442        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065256') where customid='00235880';
update quancz set customid=(select customid from cards where cardno='6888371800000065256') where customid='00235880';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065115';
insert into customs_c values ('00237801',(select customid from cards where cardno='6888371800000065115'));
update account set customid=(select customid from cards where cardno='6888371800000065115') where accountid='10068217        ';
update account set customid=(select customid from cards where cardno='6888371800000065115') where accountid='10068218        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065115') where customid='00237801';
update quancz set customid=(select customid from cards where cardno='6888371800000065115') where customid='00237801';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065083';
insert into customs_c values ('00240442',(select customid from cards where cardno='6888371800000065083'));
update account set customid=(select customid from cards where cardno='6888371800000065083') where accountid='10064262        ';
update account set customid=(select customid from cards where cardno='6888371800000065083') where accountid='10064263        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065083') where customid='00240442';
update quancz set customid=(select customid from cards where cardno='6888371800000065083') where customid='00240442';
delete from  account where accountid='10063262        ';
delete from  account where accountid='10063263        ';
delete from  account where accountid='10066340        ';
delete from  account where accountid='10066341        ';
delete from  account where accountid='10068161        ';
delete from  account where accountid='10068162        ';
delete from  account where accountid='00497653        ';
delete from  account where accountid='00497654        ';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065238';
insert into customs_c values ('00241105',(select customid from cards where cardno='6888371800000065238'));
update account set customid=(select customid from cards where cardno='6888371800000065238') where accountid='10068427        ';
update account set customid=(select customid from cards where cardno='6888371800000065238') where accountid='10068428        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065238') where customid='00241105';
update quancz set customid=(select customid from cards where cardno='6888371800000065238') where customid='00241105';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065055';
insert into customs_c values ('00243198',(select customid from cards where cardno='6888371800000065055'));
update account set customid=(select customid from cards where cardno='6888371800000065055') where accountid='10068109        ';
update account set customid=(select customid from cards where cardno='6888371800000065055') where accountid='10068110        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065055') where customid='00243198';
update quancz set customid=(select customid from cards where cardno='6888371800000065055') where customid='00243198';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065108';
insert into customs_c values ('00243299',(select customid from cards where cardno='6888371800000065108'));
update account set customid=(select customid from cards where cardno='6888371800000065108') where accountid='08845952        ';
update account set customid=(select customid from cards where cardno='6888371800000065108') where accountid='08845953        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065108') where customid='00243299';
update quancz set customid=(select customid from cards where cardno='6888371800000065108') where customid='00243299';
delete from  account where accountid='10064346        ';
delete from  account where accountid='10064347        ';
delete from  account where accountid='10063306        ';
delete from  account where accountid='10063307        ';
delete from  account where accountid='10066384        ';
delete from  account where accountid='10066385        ';
delete from  account where accountid='10068205        ';
delete from  account where accountid='10068206        ';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065079';
insert into customs_c values ('00243443',(select customid from cards where cardno='6888371800000065079'));
update account set customid=(select customid from cards where cardno='6888371800000065079') where accountid='10068153        ';
update account set customid=(select customid from cards where cardno='6888371800000065079') where accountid='10068154        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065079') where customid='00243443';
update quancz set customid=(select customid from cards where cardno='6888371800000065079') where customid='00243443';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065637';
insert into customs_c values ('00243722',(select customid from cards where cardno='6888371800000065637'));
update account set customid=(select customid from cards where cardno='6888371800000065637') where accountid='10090019        ';
update account set customid=(select customid from cards where cardno='6888371800000065637') where accountid='10090020        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065637') where customid='00243722';
update quancz set customid=(select customid from cards where cardno='6888371800000065637') where customid='00243722';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000059027';
insert into customs_c values ('00245713',(select customid from cards where cardno='6888371800000059027'));
update account set customid=(select customid from cards where cardno='6888371800000059027') where accountid='00508617        ';
update account set customid=(select customid from cards where cardno='6888371800000059027') where accountid='00508618        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000059027') where customid='00245713';
update quancz set customid=(select customid from cards where cardno='6888371800000059027') where customid='00245713';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000059022';
insert into customs_c values ('00246791',(select customid from cards where cardno='6888371800000059022'));
update account set customid=(select customid from cards where cardno='6888371800000059022') where accountid='10092723        ';
update account set customid=(select customid from cards where cardno='6888371800000059022') where accountid='10092724        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000059022') where customid='00246791';
update quancz set customid=(select customid from cards where cardno='6888371800000059022') where customid='00246791';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000059008';
insert into customs_c values ('00247871',(select customid from cards where cardno='6888371800000059008'));
update account set customid=(select customid from cards where cardno='6888371800000059008') where accountid='00512934        ';
update account set customid=(select customid from cards where cardno='6888371800000059008') where accountid='00512935        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000059008') where customid='00247871';
update quancz set customid=(select customid from cards where cardno='6888371800000059008') where customid='00247871';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065107';
insert into customs_c values ('00248702',(select customid from cards where cardno='6888371800000065107'));
update account set customid=(select customid from cards where cardno='6888371800000065107') where accountid='00514597        ';
update account set customid=(select customid from cards where cardno='6888371800000065107') where accountid='00514598        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065107') where customid='00248702';
update quancz set customid=(select customid from cards where cardno='6888371800000065107') where customid='00248702';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000058936';
insert into customs_c values ('00259785',(select customid from cards where cardno='6888371800000058936'));
update account set customid=(select customid from cards where cardno='6888371800000058936') where accountid='00534190        ';
update account set customid=(select customid from cards where cardno='6888371800000058936') where accountid='00534191        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000058936') where customid='00259785';
update quancz set customid=(select customid from cards where cardno='6888371800000058936') where customid='00259785';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065072';
insert into customs_c values ('00260966',(select customid from cards where cardno='6888371800000065072'));
update account set customid=(select customid from cards where cardno='6888371800000065072') where accountid='08845889        ';
update account set customid=(select customid from cards where cardno='6888371800000065072') where accountid='08845890        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065072') where customid='00260966';
update quancz set customid=(select customid from cards where cardno='6888371800000065072') where customid='00260966';
delete from  account where accountid='10064222        ';
delete from  account where accountid='10064223        ';
delete from  account where accountid='10063244        ';
delete from  account where accountid='10063245        ';
delete from  account where accountid='10066320        ';
delete from  account where accountid='10066321        ';
delete from  account where accountid='10068141        ';
delete from  account where accountid='10068142        ';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000058857';
insert into customs_c values ('00273678',(select customid from cards where cardno='6888371800000058857'));
update account set customid=(select customid from cards where cardno='6888371800000058857') where accountid='10092469        ';
update account set customid=(select customid from cards where cardno='6888371800000058857') where accountid='00567972        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000058857') where customid='00273678';
update quancz set customid=(select customid from cards where cardno='6888371800000058857') where customid='00273678';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065252';
insert into customs_c values ('00274343',(select customid from cards where cardno='6888371800000065252'));
update account set customid=(select customid from cards where cardno='6888371800000065252') where accountid='10068435        ';
update account set customid=(select customid from cards where cardno='6888371800000065252') where accountid='10068436        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065252') where customid='00274343';
update quancz set customid=(select customid from cards where cardno='6888371800000065252') where customid='00274343';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000058875';
insert into customs_c values ('00283238',(select customid from cards where cardno='6888371800000058875'));
update account set customid=(select customid from cards where cardno='6888371800000058875') where accountid='10092499        ';
update account set customid=(select customid from cards where cardno='6888371800000058875') where accountid='10092500        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000058875') where customid='00283238';
update quancz set customid=(select customid from cards where cardno='6888371800000058875') where customid='00283238';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065860';
insert into customs_c values ('00288232',(select customid from cards where cardno='6888371800000065860'));
update account set customid=(select customid from cards where cardno='6888371800000065860') where accountid='00611108        ';
update account set customid=(select customid from cards where cardno='6888371800000065860') where accountid='00611109        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065860') where customid='00288232';
update quancz set customid=(select customid from cards where cardno='6888371800000065860') where customid='00288232';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065730';
insert into customs_c values ('00291479',(select customid from cards where cardno='6888371800000065730'));
update account set customid=(select customid from cards where cardno='6888371800000065730') where accountid='00620456        ';
update account set customid=(select customid from cards where cardno='6888371800000065730') where accountid='00620457        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065730') where customid='00291479';
update quancz set customid=(select customid from cards where cardno='6888371800000065730') where customid='00291479';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065717';
insert into customs_c values ('00291646',(select customid from cards where cardno='6888371800000065717'));
update account set customid=(select customid from cards where cardno='6888371800000065717') where accountid='00620927        ';
update account set customid=(select customid from cards where cardno='6888371800000065717') where accountid='00620928        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065717') where customid='00291646';
update quancz set customid=(select customid from cards where cardno='6888371800000065717') where customid='00291646';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065866';
insert into customs_c values ('00295374',(select customid from cards where cardno='6888371800000065866'));
update account set customid=(select customid from cards where cardno='6888371800000065866') where accountid='10090359        ';
update account set customid=(select customid from cards where cardno='6888371800000065866') where accountid='10090360        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065866') where customid='00295374';
update quancz set customid=(select customid from cards where cardno='6888371800000065866') where customid='00295374';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000058860';
insert into customs_c values ('00301885',(select customid from cards where cardno='6888371800000058860'));
update account set customid=(select customid from cards where cardno='6888371800000058860') where accountid='00650223        ';
update account set customid=(select customid from cards where cardno='6888371800000058860') where accountid='00650224        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000058860') where customid='00301885';
update quancz set customid=(select customid from cards where cardno='6888371800000058860') where customid='00301885';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065555';
insert into customs_c values ('00302948',(select customid from cards where cardno='6888371800000065555'));
update account set customid=(select customid from cards where cardno='6888371800000065555') where accountid='00653416        ';
update account set customid=(select customid from cards where cardno='6888371800000065555') where accountid='00653417        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065555') where customid='00302948';
update quancz set customid=(select customid from cards where cardno='6888371800000065555') where customid='00302948';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6886371888800023635';
insert into customs_c values ('00303713',(select customid from cards where cardno='6886371888800023635'));
update account set customid=(select customid from cards where cardno='6886371888800023635') where accountid='00655319        ';
update account set customid=(select customid from cards where cardno='6886371888800023635') where accountid='00655320        ';
update account set customid=(select customid from cards where cardno='6886371888800023635') where accountid='00657673        ';
delete from  account where accountid='00656080        ';
delete from  account where accountid='00656613        ';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065112';
insert into customs_c values ('00309022',(select customid from cards where cardno='6888371800000065112'));
update account set customid=(select customid from cards where cardno='6888371800000065112') where accountid='10064354        ';
update account set customid=(select customid from cards where cardno='6888371800000065112') where accountid='10064375        ';
update account set customid=(select customid from cards where cardno='6888371800000065112') where accountid='00671596        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065112') where customid='00309022';
update quancz set customid=(select customid from cards where cardno='6888371800000065112') where customid='00309022';
delete from  account where accountid='10063312        ';
delete from  account where accountid='10063313        ';
delete from  account where accountid='10066392        ';
delete from  account where accountid='10066393        ';
delete from  account where accountid='10068213        ';
delete from  account where accountid='10068214        ';
delete from  account where accountid='00671594        ';
delete from  account where accountid='00671595        ';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000058862';
insert into customs_c values ('00311526',(select customid from cards where cardno='6888371800000058862'));
update account set customid=(select customid from cards where cardno='6888371800000058862') where accountid='10092479        ';
update account set customid=(select customid from cards where cardno='6888371800000058862') where accountid='10092480        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000058862') where customid='00311526';
update quancz set customid=(select customid from cards where cardno='6888371800000058862') where customid='00311526';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065203';
insert into customs_c values ('00315509',(select customid from cards where cardno='6888371800000065203'));
update account set customid=(select customid from cards where cardno='6888371800000065203') where accountid='10064640        ';
update account set customid=(select customid from cards where cardno='6888371800000065203') where accountid='10064641        ';
update account set customid=(select customid from cards where cardno='6888371800000065203') where accountid='00690239        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065203') where customid='00315509';
update quancz set customid=(select customid from cards where cardno='6888371800000065203') where customid='00315509';
delete from  account where accountid='10063440        ';
delete from  account where accountid='10063441        ';
delete from  account where accountid='10066538        ';
delete from  account where accountid='10066539        ';
delete from  account where accountid='10068359        ';
delete from  account where accountid='10068360        ';
delete from  account where accountid='00690237        ';
delete from  account where accountid='00690238        ';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065258';
insert into customs_c values ('00327256',(select customid from cards where cardno='6888371800000065258'));
update account set customid=(select customid from cards where cardno='6888371800000065258') where accountid='08845567        ';
update account set customid=(select customid from cards where cardno='6888371800000065258') where accountid='08845568        ';
update account set customid=(select customid from cards where cardno='6888371800000065258') where accountid='08845569        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065258') where customid='00327256';
update quancz set customid=(select customid from cards where cardno='6888371800000065258') where customid='00327256';
delete from  account where accountid='10064720        ';
delete from  account where accountid='10064721        ';
delete from  account where accountid='10063514        ';
delete from  account where accountid='10063515        ';
delete from  account where accountid='10066618        ';
delete from  account where accountid='10066619        ';
delete from  account where accountid='10068445        ';
delete from  account where accountid='10068446        ';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065719';
insert into customs_c values ('00327512',(select customid from cards where cardno='6888371800000065719'));
update account set customid=(select customid from cards where cardno='6888371800000065719') where accountid='10090133        ';
update account set customid=(select customid from cards where cardno='6888371800000065719') where accountid='10090134        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065719') where customid='00327512';
update quancz set customid=(select customid from cards where cardno='6888371800000065719') where customid='00327512';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065292';
insert into customs_c values ('00328869',(select customid from cards where cardno='6888371800000065292'));
update account set customid=(select customid from cards where cardno='6888371800000065292') where accountid='00714293        ';
update account set customid=(select customid from cards where cardno='6888371800000065292') where accountid='00714294        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065292') where customid='00328869';
update quancz set customid=(select customid from cards where cardno='6888371800000065292') where customid='00328869';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065562';
insert into customs_c values ('00332710',(select customid from cards where cardno='6888371800000065562'));
update account set customid=(select customid from cards where cardno='6888371800000065562') where accountid='00725754        ';
update account set customid=(select customid from cards where cardno='6888371800000065562') where accountid='00725755        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065562') where customid='00332710';
update quancz set customid=(select customid from cards where cardno='6888371800000065562') where customid='00332710';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000058873';
insert into customs_c values ('00337233',(select customid from cards where cardno='6888371800000058873'));
update account set customid=(select customid from cards where cardno='6888371800000058873') where accountid='00739412        ';
update account set customid=(select customid from cards where cardno='6888371800000058873') where accountid='00739413        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000058873') where customid='00337233';
update quancz set customid=(select customid from cards where cardno='6888371800000058873') where customid='00337233';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065153';
insert into customs_c values ('00342512',(select customid from cards where cardno='6888371800000065153'));
update account set customid=(select customid from cards where cardno='6888371800000065153') where accountid='00756323        ';
update account set customid=(select customid from cards where cardno='6888371800000065153') where accountid='00756324        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065153') where customid='00342512';
update quancz set customid=(select customid from cards where cardno='6888371800000065153') where customid='00342512';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065202';
insert into customs_c values ('00350078',(select customid from cards where cardno='6888371800000065202'));
update account set customid=(select customid from cards where cardno='6888371800000065202') where accountid='10068357        ';
update account set customid=(select customid from cards where cardno='6888371800000065202') where accountid='10068358        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065202') where customid='00350078';
update quancz set customid=(select customid from cards where cardno='6888371800000065202') where customid='00350078';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065550';
insert into customs_c values ('00371615',(select customid from cards where cardno='6888371800000065550'));
update account set customid=(select customid from cards where cardno='6888371800000065550') where accountid='00829833        ';
update account set customid=(select customid from cards where cardno='6888371800000065550') where accountid='00829834        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065550') where customid='00371615';
update quancz set customid=(select customid from cards where cardno='6888371800000065550') where customid='00371615';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065537';
insert into customs_c values ('00470437',(select customid from cards where cardno='6888371800000065537'));
update account set customid=(select customid from cards where cardno='6888371800000065537') where accountid='10089885        ';
update account set customid=(select customid from cards where cardno='6888371800000065537') where accountid='10089886        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065537') where customid='00470437';
update quancz set customid=(select customid from cards where cardno='6888371800000065537') where customid='00470437';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065239';
insert into customs_c values ('00484974',(select customid from cards where cardno='6888371800000065239'));
update account set customid=(select customid from cards where cardno='6888371800000065239') where accountid='08845575        ';
update account set customid=(select customid from cards where cardno='6888371800000065239') where accountid='08845576        ';
update account set customid=(select customid from cards where cardno='6888371800000065239') where accountid='08845577        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065239') where customid='00484974';
update quancz set customid=(select customid from cards where cardno='6888371800000065239') where customid='00484974';
delete from  account where accountid='10064704        ';
delete from  account where accountid='10064705        ';
delete from  account where accountid='10063500        ';
delete from  account where accountid='10063501        ';
delete from  account where accountid='10066602        ';
delete from  account where accountid='10066603        ';
delete from  account where accountid='10068429        ';
delete from  account where accountid='10068430        ';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065263';
insert into customs_c values ('00486346',(select customid from cards where cardno='6888371800000065263'));
update account set customid=(select customid from cards where cardno='6888371800000065263') where accountid='08845599        ';
update account set customid=(select customid from cards where cardno='6888371800000065263') where accountid='08845600        ';
update account set customid=(select customid from cards where cardno='6888371800000065263') where accountid='08845601        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065263') where customid='00486346';
update quancz set customid=(select customid from cards where cardno='6888371800000065263') where customid='00486346';
delete from  account where accountid='10064730        ';
delete from  account where accountid='10064731        ';
delete from  account where accountid='10063524        ';
delete from  account where accountid='10063525        ';
delete from  account where accountid='10066628        ';
delete from  account where accountid='10066629        ';
delete from  account where accountid='10068455        ';
delete from  account where accountid='10068456        ';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065269';
insert into customs_c values ('00486863',(select customid from cards where cardno='6888371800000065269'));
update account set customid=(select customid from cards where cardno='6888371800000065269') where accountid='10064740        ';
update account set customid=(select customid from cards where cardno='6888371800000065269') where accountid='10064741        ';
update account set customid=(select customid from cards where cardno='6888371800000065269') where accountid='00909649        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065269') where customid='00486863';
update quancz set customid=(select customid from cards where cardno='6888371800000065269') where customid='00486863';
delete from  account where accountid='10063534        ';
delete from  account where accountid='10063535        ';
delete from  account where accountid='10066638        ';
delete from  account where accountid='10066639        ';
delete from  account where accountid='10068465        ';
delete from  account where accountid='10068466        ';
delete from  account where accountid='00909647        ';
delete from  account where accountid='00909648        ';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065552';
insert into customs_c values ('00508693',(select customid from cards where cardno='6888371800000065552'));
update account set customid=(select customid from cards where cardno='6888371800000065552') where accountid='10089895        ';
update account set customid=(select customid from cards where cardno='6888371800000065552') where accountid='10089896        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065552') where customid='00508693';
update quancz set customid=(select customid from cards where cardno='6888371800000065552') where customid='00508693';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065561';
insert into customs_c values ('00523152',(select customid from cards where cardno='6888371800000065561'));
update account set customid=(select customid from cards where cardno='6888371800000065561') where accountid='10089911        ';
update account set customid=(select customid from cards where cardno='6888371800000065561') where accountid='10089912        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065561') where customid='00523152';
update quancz set customid=(select customid from cards where cardno='6888371800000065561') where customid='00523152';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000058872';
insert into customs_c values ('00542160',(select customid from cards where cardno='6888371800000058872'));
update account set customid=(select customid from cards where cardno='6888371800000058872') where accountid='01042398        ';
update account set customid=(select customid from cards where cardno='6888371800000058872') where accountid='01042399        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000058872') where customid='00542160';
update quancz set customid=(select customid from cards where cardno='6888371800000058872') where customid='00542160';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065268';
insert into customs_c values ('00553805',(select customid from cards where cardno='6888371800000065268'));
update account set customid=(select customid from cards where cardno='6888371800000065268') where accountid='10068463        ';
update account set customid=(select customid from cards where cardno='6888371800000065268') where accountid='10068464        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065268') where customid='00553805';
update quancz set customid=(select customid from cards where cardno='6888371800000065268') where customid='00553805';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065720';
insert into customs_c values ('00556590',(select customid from cards where cardno='6888371800000065720'));
update account set customid=(select customid from cards where cardno='6888371800000065720') where accountid='01080211        ';
update account set customid=(select customid from cards where cardno='6888371800000065720') where accountid='01080212        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065720') where customid='00556590';
update quancz set customid=(select customid from cards where cardno='6888371800000065720') where customid='00556590';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000058778';
insert into customs_c values ('00563663',(select customid from cards where cardno='6888371800000058778'));
update account set customid=(select customid from cards where cardno='6888371800000058778') where accountid='01100129        ';
update account set customid=(select customid from cards where cardno='6888371800000058778') where accountid='01100130        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000058778') where customid='00563663';
update quancz set customid=(select customid from cards where cardno='6888371800000058778') where customid='00563663';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065937';
insert into customs_c values ('00577801',(select customid from cards where cardno='6888371800000065937'));
update account set customid=(select customid from cards where cardno='6888371800000065937') where accountid='01137079        ';
update account set customid=(select customid from cards where cardno='6888371800000065937') where accountid='01137080        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065937') where customid='00577801';
update quancz set customid=(select customid from cards where cardno='6888371800000065937') where customid='00577801';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065253';
insert into customs_c values ('00577902',(select customid from cards where cardno='6888371800000065253'));
update account set customid=(select customid from cards where cardno='6888371800000065253') where accountid='01137436        ';
update account set customid=(select customid from cards where cardno='6888371800000065253') where accountid='01137437        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065253') where customid='00577902';
update quancz set customid=(select customid from cards where cardno='6888371800000065253') where customid='00577902';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065736';
insert into customs_c values ('00589812',(select customid from cards where cardno='6888371800000065736'));
update account set customid=(select customid from cards where cardno='6888371800000065736') where accountid='01172568        ';
update account set customid=(select customid from cards where cardno='6888371800000065736') where accountid='01172569        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065736') where customid='00589812';
update quancz set customid=(select customid from cards where cardno='6888371800000065736') where customid='00589812';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065235';
insert into customs_c values ('00594663',(select customid from cards where cardno='6888371800000065235'));
update account set customid=(select customid from cards where cardno='6888371800000065235') where accountid='01186510        ';
update account set customid=(select customid from cards where cardno='6888371800000065235') where accountid='01186511        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065235') where customid='00594663';
update quancz set customid=(select customid from cards where cardno='6888371800000065235') where customid='00594663';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065711';
insert into customs_c values ('00600707',(select customid from cards where cardno='6888371800000065711'));
update account set customid=(select customid from cards where cardno='6888371800000065711') where accountid='10090121        ';
update account set customid=(select customid from cards where cardno='6888371800000065711') where accountid='10090122        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065711') where customid='00600707';
update quancz set customid=(select customid from cards where cardno='6888371800000065711') where customid='00600707';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065933';
insert into customs_c values ('00601273',(select customid from cards where cardno='6888371800000065933'));
update account set customid=(select customid from cards where cardno='6888371800000065933') where accountid='01206248        ';
update account set customid=(select customid from cards where cardno='6888371800000065933') where accountid='01206249        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065933') where customid='00601273';
update quancz set customid=(select customid from cards where cardno='6888371800000065933') where customid='00601273';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000059036';
insert into customs_c values ('00610596',(select customid from cards where cardno='6888371800000059036'));
update account set customid=(select customid from cards where cardno='6888371800000059036') where accountid='01234512        ';
update account set customid=(select customid from cards where cardno='6888371800000059036') where accountid='01234513        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000059036') where customid='00610596';
update quancz set customid=(select customid from cards where cardno='6888371800000059036') where customid='00610596';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065236';
insert into customs_c values ('00620621',(select customid from cards where cardno='6888371800000065236'));
update account set customid=(select customid from cards where cardno='6888371800000065236') where accountid='10068423        ';
update account set customid=(select customid from cards where cardno='6888371800000065236') where accountid='10068424        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065236') where customid='00620621';
update quancz set customid=(select customid from cards where cardno='6888371800000065236') where customid='00620621';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000058877';
insert into customs_c values ('00621981',(select customid from cards where cardno='6888371800000058877'));
update account set customid=(select customid from cards where cardno='6888371800000058877') where accountid='01268476        ';
update account set customid=(select customid from cards where cardno='6888371800000058877') where accountid='01268477        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000058877') where customid='00621981';
update quancz set customid=(select customid from cards where cardno='6888371800000058877') where customid='00621981';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065229';
insert into customs_c values ('00637717',(select customid from cards where cardno='6888371800000065229'));
update account set customid=(select customid from cards where cardno='6888371800000065229') where accountid='10068411        ';
update account set customid=(select customid from cards where cardno='6888371800000065229') where accountid='10068412        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065229') where customid='00637717';
update quancz set customid=(select customid from cards where cardno='6888371800000065229') where customid='00637717';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065251';
insert into customs_c values ('00637985',(select customid from cards where cardno='6888371800000065251'));
update account set customid=(select customid from cards where cardno='6888371800000065251') where accountid='10064708        ';
update account set customid=(select customid from cards where cardno='6888371800000065251') where accountid='10064709        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065251') where customid='00637985';
update quancz set customid=(select customid from cards where cardno='6888371800000065251') where customid='00637985';
delete from  account where accountid='10063146        ';
delete from  account where accountid='10063147        ';
delete from  account where accountid='10066606        ';
delete from  account where accountid='10066607        ';
delete from  account where accountid='10068433        ';
delete from  account where accountid='10068434        ';








update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065715';
insert into customs_c values ('00662351',(select customid from cards where cardno='6888371800000065715'));
update account set customid=(select customid from cards where cardno='6888371800000065715') where accountid='01388537        ';
update account set customid=(select customid from cards where cardno='6888371800000065715') where accountid='01388538        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065715') where customid='00662351';
update quancz set customid=(select customid from cards where cardno='6888371800000065715') where customid='00662351';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065938';
insert into customs_c values ('00670109',(select customid from cards where cardno='6888371800000065938'));
update account set customid=(select customid from cards where cardno='6888371800000065938') where accountid='10090467        ';
update account set customid=(select customid from cards where cardno='6888371800000065938') where accountid='10090468        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065938') where customid='00670109';
update quancz set customid=(select customid from cards where cardno='6888371800000065938') where customid='00670109';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065070';
insert into customs_c values ('00708220',(select customid from cards where cardno='6888371800000065070'));
update account set customid=(select customid from cards where cardno='6888371800000065070') where accountid='10068137        ';
update account set customid=(select customid from cards where cardno='6888371800000065070') where accountid='10068138        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065070') where customid='00708220';
update quancz set customid=(select customid from cards where cardno='6888371800000065070') where customid='00708220';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065237';
insert into customs_c values ('00717822',(select customid from cards where cardno='6888371800000065237'));
update account set customid=(select customid from cards where cardno='6888371800000065237') where accountid='01548512        ';
update account set customid=(select customid from cards where cardno='6888371800000065237') where accountid='01548513        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065237') where customid='00717822';
update quancz set customid=(select customid from cards where cardno='6888371800000065237') where customid='00717822';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6886371800000396312';
insert into customs_c values ('00723205',(select customid from cards where cardno='6886371800000396312'));
update account set customid=(select customid from cards where cardno='6886371800000396312') where accountid='02245499        ';
update account set customid=(select customid from cards where cardno='6886371800000396312') where accountid='02245500        ';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6886371800000350640';
insert into customs_c values ('00723214',(select customid from cards where cardno='6886371800000350640'));
update account set customid=(select customid from cards where cardno='6886371800000350640') where accountid='02080461        ';
update account set customid=(select customid from cards where cardno='6886371800000350640') where accountid='02080462        ';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6886371800000356403';
insert into customs_c values ('00723215',(select customid from cards where cardno='6886371800000356403'));
update account set customid=(select customid from cards where cardno='6886371800000356403') where accountid='02078649        ';
update account set customid=(select customid from cards where cardno='6886371800000356403') where accountid='02078650        ';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6886371800000393176';
insert into customs_c values ('00723230',(select customid from cards where cardno='6886371800000393176'));
update account set customid=(select customid from cards where cardno='6886371800000393176') where accountid='02257303        ';
update account set customid=(select customid from cards where cardno='6886371800000393176') where accountid='02257304        ';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6886371800000284076';
insert into customs_c values ('00723234',(select customid from cards where cardno='6886371800000284076'));
update account set customid=(select customid from cards where cardno='6886371800000284076') where accountid='01592519        ';
update account set customid=(select customid from cards where cardno='6886371800000284076') where accountid='01592520        ';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6886371800000387149';
insert into customs_c values ('00723242',(select customid from cards where cardno='6886371800000387149'));
update account set customid=(select customid from cards where cardno='6886371800000387149') where accountid='02197423        ';
update account set customid=(select customid from cards where cardno='6886371800000387149') where accountid='02197424        ';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000053109';
insert into customs_c values ('00723250',(select customid from cards where cardno='6888371800000053109'));
update account set customid=(select customid from cards where cardno='6888371800000053109') where accountid='01782898        ';
update account set customid=(select customid from cards where cardno='6888371800000053109') where accountid='01782899        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000053109') where customid='00723250';
update quancz set customid=(select customid from cards where cardno='6888371800000053109') where customid='00723250';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000053217';
insert into customs_c values ('00723251',(select customid from cards where cardno='6888371800000053217'));
update account set customid=(select customid from cards where cardno='6888371800000053217') where accountid='01782986        ';
update account set customid=(select customid from cards where cardno='6888371800000053217') where accountid='01782987        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000053217') where customid='00723251';
update quancz set customid=(select customid from cards where cardno='6888371800000053217') where customid='00723251';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000053218';
insert into customs_c values ('00723252',(select customid from cards where cardno='6888371800000053218'));
update account set customid=(select customid from cards where cardno='6888371800000053218') where accountid='01782988        ';
update account set customid=(select customid from cards where cardno='6888371800000053218') where accountid='01782989        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000053218') where customid='00723252';
update quancz set customid=(select customid from cards where cardno='6888371800000053218') where customid='00723252';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000053219';
insert into customs_c values ('00723253',(select customid from cards where cardno='6888371800000053219'));
update account set customid=(select customid from cards where cardno='6888371800000053219') where accountid='01782990        ';
update account set customid=(select customid from cards where cardno='6888371800000053219') where accountid='01782991        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000053219') where customid='00723253';
update quancz set customid=(select customid from cards where cardno='6888371800000053219') where customid='00723253';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000053220';
insert into customs_c values ('00723254',(select customid from cards where cardno='6888371800000053220'));
update account set customid=(select customid from cards where cardno='6888371800000053220') where accountid='01782992        ';
update account set customid=(select customid from cards where cardno='6888371800000053220') where accountid='01782993        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000053220') where customid='00723254';
update quancz set customid=(select customid from cards where cardno='6888371800000053220') where customid='00723254';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000053221';
insert into customs_c values ('00723255',(select customid from cards where cardno='6888371800000053221'));
update account set customid=(select customid from cards where cardno='6888371800000053221') where accountid='01782994        ';
update account set customid=(select customid from cards where cardno='6888371800000053221') where accountid='01782995        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000053221') where customid='00723255';
update quancz set customid=(select customid from cards where cardno='6888371800000053221') where customid='00723255';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000053212';
insert into customs_c values ('00723256',(select customid from cards where cardno='6888371800000053212'));
update account set customid=(select customid from cards where cardno='6888371800000053212') where accountid='01782978        ';
update account set customid=(select customid from cards where cardno='6888371800000053212') where accountid='01782979        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000053212') where customid='00723256';
update quancz set customid=(select customid from cards where cardno='6888371800000053212') where customid='00723256';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6886371800000334080';
insert into customs_c values ('00723259',(select customid from cards where cardno='6886371800000334080'));
update account set customid=(select customid from cards where cardno='6886371800000334080') where accountid='01857390        ';
update account set customid=(select customid from cards where cardno='6886371800000334080') where accountid='01857391        ';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6886371800000307987';
insert into customs_c values ('00723270',(select customid from cards where cardno='6886371800000307987'));
update account set customid=(select customid from cards where cardno='6886371800000307987') where accountid='01741052        ';
update account set customid=(select customid from cards where cardno='6886371800000307987') where accountid='01741053        ';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6886371800000306976';
insert into customs_c values ('00723272',(select customid from cards where cardno='6886371800000306976'));
update account set customid=(select customid from cards where cardno='6886371800000306976') where accountid='01740629        ';
update account set customid=(select customid from cards where cardno='6886371800000306976') where accountid='01740630        ';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6886371800000314149';
insert into customs_c values ('00723277',(select customid from cards where cardno='6886371800000314149'));
update account set customid=(select customid from cards where cardno='6886371800000314149') where accountid='01784222        ';
update account set customid=(select customid from cards where cardno='6886371800000314149') where accountid='01784223        ';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6886371800000317581';
insert into customs_c values ('00723278',(select customid from cards where cardno='6886371800000317581'));
update account set customid=(select customid from cards where cardno='6886371800000317581') where accountid='01837272        ';
update account set customid=(select customid from cards where cardno='6886371800000317581') where accountid='01837273        ';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6886371800000357733';
insert into customs_c values ('00723283',(select customid from cards where cardno='6886371800000357733'));
update account set customid=(select customid from cards where cardno='6886371800000357733') where accountid='02059265        ';
update account set customid=(select customid from cards where cardno='6886371800000357733') where accountid='02059266        ';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000053260';
insert into customs_c values ('00723293',(select customid from cards where cardno='6888371800000053260'));
update account set customid=(select customid from cards where cardno='6888371800000053260') where accountid='01783026        ';
update account set customid=(select customid from cards where cardno='6888371800000053260') where accountid='01783027        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000053260') where customid='00723293';
update quancz set customid=(select customid from cards where cardno='6888371800000053260') where customid='00723293';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6886371800000297544';
insert into customs_c values ('00723294',(select customid from cards where cardno='6886371800000297544'));
update account set customid=(select customid from cards where cardno='6886371800000297544') where accountid='01624127        ';
update account set customid=(select customid from cards where cardno='6886371800000297544') where accountid='01624128        ';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065155';
insert into customs_c values ('00740652',(select customid from cards where cardno='6888371800000065155'));
update account set customid=(select customid from cards where cardno='6888371800000065155') where accountid='10064472        ';
update account set customid=(select customid from cards where cardno='6888371800000065155') where accountid='10064473        ';
update account set customid=(select customid from cards where cardno='6888371800000065155') where accountid='01616288        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065155') where customid='00740652';
update quancz set customid=(select customid from cards where cardno='6888371800000065155') where customid='00740652';
delete from  account where accountid='10063364        ';
delete from  account where accountid='10063365        ';
delete from  account where accountid='10066450        ';
delete from  account where accountid='10066451        ';
delete from  account where accountid='10068271        ';
delete from  account where accountid='10068272        ';
delete from  account where accountid='01616286        ';
delete from  account where accountid='01616287        ';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065128';
insert into customs_c values ('00752559',(select customid from cards where cardno='6888371800000065128'));
update account set customid=(select customid from cards where cardno='6888371800000065128') where accountid='10063336        ';
update account set customid=(select customid from cards where cardno='6888371800000065128') where accountid='10063337        ';
update account set customid=(select customid from cards where cardno='6888371800000065128') where accountid='06591094        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065128') where customid='00752559';
update quancz set customid=(select customid from cards where cardno='6888371800000065128') where customid='00752559';
delete from  account where accountid='10066420        ';
delete from  account where accountid='10066421        ';
delete from  account where accountid='10068241        ';
delete from  account where accountid='10068242        ';
delete from  account where accountid='01651919        ';
delete from  account where accountid='01651920        ';
delete from  account where accountid='06591092        ';
delete from  account where accountid='06591093        ';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000058935';
insert into customs_c values ('00760681',(select customid from cards where cardno='6888371800000058935'));
update account set customid=(select customid from cards where cardno='6888371800000058935') where accountid='01676135        ';
update account set customid=(select customid from cards where cardno='6888371800000058935') where accountid='01676136        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000058935') where customid='00760681';
update quancz set customid=(select customid from cards where cardno='6888371800000058935') where customid='00760681';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065136';
insert into customs_c values ('00760880',(select customid from cards where cardno='6888371800000065136'));
update account set customid=(select customid from cards where cardno='6888371800000065136') where accountid='01676726        ';
update account set customid=(select customid from cards where cardno='6888371800000065136') where accountid='01676727        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065136') where customid='00760880';
update quancz set customid=(select customid from cards where cardno='6888371800000065136') where customid='00760880';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065539';
insert into customs_c values ('00766206',(select customid from cards where cardno='6888371800000065539'));
update account set customid=(select customid from cards where cardno='6888371800000065539') where accountid='01692681        ';
update account set customid=(select customid from cards where cardno='6888371800000065539') where accountid='01692682        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065539') where customid='00766206';
update quancz set customid=(select customid from cards where cardno='6888371800000065539') where customid='00766206';








update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6886371800000323156';
insert into customs_c values ('00796387',(select customid from cards where cardno='6886371800000323156'));
update account set customid=(select customid from cards where cardno='6886371800000323156') where accountid='01782790        ';
update account set customid=(select customid from cards where cardno='6886371800000323156') where accountid='01782791        ';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6886371800000331772';
insert into customs_c values ('00796400',(select customid from cards where cardno='6886371800000331772'));
update account set customid=(select customid from cards where cardno='6886371800000331772') where accountid='01782816        ';
update account set customid=(select customid from cards where cardno='6886371800000331772') where accountid='01782817        ';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6886371800000369187';
insert into customs_c values ('00796716',(select customid from cards where cardno='6886371800000369187'));
update account set customid=(select customid from cards where cardno='6886371800000369187') where accountid='02104333        ';
update account set customid=(select customid from cards where cardno='6886371800000369187') where accountid='02104334        ';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6886371800000330379';
insert into customs_c values ('00796723',(select customid from cards where cardno='6886371800000330379'));
update account set customid=(select customid from cards where cardno='6886371800000330379') where accountid='01783257        ';
update account set customid=(select customid from cards where cardno='6886371800000330379') where accountid='01783258        ';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6886371800000349984';
insert into customs_c values ('00796724',(select customid from cards where cardno='6886371800000349984'));
update account set customid=(select customid from cards where cardno='6886371800000349984') where accountid='01783259        ';
update account set customid=(select customid from cards where cardno='6886371800000349984') where accountid='01783260        ';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6886371800000361405';
insert into customs_c values ('00796730',(select customid from cards where cardno='6886371800000361405'));
update account set customid=(select customid from cards where cardno='6886371800000361405') where accountid='01783271        ';
update account set customid=(select customid from cards where cardno='6886371800000361405') where accountid='01783272        ';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6886371800000358338';
insert into customs_c values ('00796740',(select customid from cards where cardno='6886371800000358338'));
update account set customid=(select customid from cards where cardno='6886371800000358338') where accountid='02080005        ';
update account set customid=(select customid from cards where cardno='6886371800000358338') where accountid='02080006        ';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6886371800000373522';
insert into customs_c values ('00796742',(select customid from cards where cardno='6886371800000373522'));
update account set customid=(select customid from cards where cardno='6886371800000373522') where accountid='02129290        ';
update account set customid=(select customid from cards where cardno='6886371800000373522') where accountid='02129291        ';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6886371800000352876';
insert into customs_c values ('00796748',(select customid from cards where cardno='6886371800000352876'));
update account set customid=(select customid from cards where cardno='6886371800000352876') where accountid='02101646        ';
update account set customid=(select customid from cards where cardno='6886371800000352876') where accountid='02101647        ';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6886371800000347256';
insert into customs_c values ('00796757',(select customid from cards where cardno='6886371800000347256'));
update account set customid=(select customid from cards where cardno='6886371800000347256') where accountid='02046819        ';
update account set customid=(select customid from cards where cardno='6886371800000347256') where accountid='02046820        ';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6886371800000360856';
insert into customs_c values ('00796761',(select customid from cards where cardno='6886371800000360856'));
update account set customid=(select customid from cards where cardno='6886371800000360856') where accountid='01783333        ';
update account set customid=(select customid from cards where cardno='6886371800000360856') where accountid='01783334        ';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6886371800000343082';
insert into customs_c values ('00796773',(select customid from cards where cardno='6886371800000343082'));
update account set customid=(select customid from cards where cardno='6886371800000343082') where accountid='02022136        ';
update account set customid=(select customid from cards where cardno='6886371800000343082') where accountid='02022137        ';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6886371800000359669';
insert into customs_c values ('00796779',(select customid from cards where cardno='6886371800000359669'));
update account set customid=(select customid from cards where cardno='6886371800000359669') where accountid='02033070        ';
update account set customid=(select customid from cards where cardno='6886371800000359669') where accountid='02033071        ';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6886371800000346916';
insert into customs_c values ('00796783',(select customid from cards where cardno='6886371800000346916'));
update account set customid=(select customid from cards where cardno='6886371800000346916') where accountid='01783377        ';
update account set customid=(select customid from cards where cardno='6886371800000346916') where accountid='01783378        ';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000053736';
insert into customs_c values ('00796793',(select customid from cards where cardno='6888371800000053736'));
update account set customid=(select customid from cards where cardno='6888371800000053736') where accountid='01783429        ';
update account set customid=(select customid from cards where cardno='6888371800000053736') where accountid='01783430        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000053736') where customid='00796793';
update quancz set customid=(select customid from cards where cardno='6888371800000053736') where customid='00796793';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6886371800000344332';
insert into customs_c values ('00796847',(select customid from cards where cardno='6886371800000344332'));
update account set customid=(select customid from cards where cardno='6886371800000344332') where accountid='01783505        ';
update account set customid=(select customid from cards where cardno='6886371800000344332') where accountid='01783506        ';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065257';
insert into customs_c values ('00809728',(select customid from cards where cardno='6888371800000065257'));
update account set customid=(select customid from cards where cardno='6888371800000065257') where accountid='01820411        ';
update account set customid=(select customid from cards where cardno='6888371800000065257') where accountid='01820412        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065257') where customid='00809728';
update quancz set customid=(select customid from cards where cardno='6888371800000065257') where customid='00809728';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065737';
insert into customs_c values ('00817405',(select customid from cards where cardno='6888371800000065737'));
update account set customid=(select customid from cards where cardno='6888371800000065737') where accountid='10090163        ';
update account set customid=(select customid from cards where cardno='6888371800000065737') where accountid='10090164        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065737') where customid='00817405';
update quancz set customid=(select customid from cards where cardno='6888371800000065737') where customid='00817405';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065151';
insert into customs_c values ('00831480',(select customid from cards where cardno='6888371800000065151'));
update account set customid=(select customid from cards where cardno='6888371800000065151') where accountid='10068265        ';
update account set customid=(select customid from cards where cardno='6888371800000065151') where accountid='10068266        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065151') where customid='00831480';
update quancz set customid=(select customid from cards where cardno='6888371800000065151') where customid='00831480';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065133';
insert into customs_c values ('00869877',(select customid from cards where cardno='6888371800000065133'));
update account set customid=(select customid from cards where cardno='6888371800000065133') where accountid='10068251        ';
update account set customid=(select customid from cards where cardno='6888371800000065133') where accountid='10068252        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065133') where customid='00869877';
update quancz set customid=(select customid from cards where cardno='6888371800000065133') where customid='00869877';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065638';
insert into customs_c values ('00880515',(select customid from cards where cardno='6888371800000065638'));
update account set customid=(select customid from cards where cardno='6888371800000065638') where accountid='10090021        ';
update account set customid=(select customid from cards where cardno='6888371800000065638') where accountid='10090022        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065638') where customid='00880515';
update quancz set customid=(select customid from cards where cardno='6888371800000065638') where customid='00880515';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065111';
insert into customs_c values ('00890162',(select customid from cards where cardno='6888371800000065111'));
update account set customid=(select customid from cards where cardno='6888371800000065111') where accountid='10062742        ';
update account set customid=(select customid from cards where cardno='6888371800000065111') where accountid='10062743        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065111') where customid='00890162';
update quancz set customid=(select customid from cards where cardno='6888371800000065111') where customid='00890162';
delete from  account where accountid='10066390        ';
delete from  account where accountid='10066391        ';
delete from  account where accountid='10068211        ';
delete from  account where accountid='10068212        ';
delete from  account where accountid='02061689        ';
delete from  account where accountid='02061690        ';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065125';
insert into customs_c values ('00892542',(select customid from cards where cardno='6888371800000065125'));
update account set customid=(select customid from cards where cardno='6888371800000065125') where accountid='02068652        ';
update account set customid=(select customid from cards where cardno='6888371800000065125') where accountid='02068653        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065125') where customid='00892542';
update quancz set customid=(select customid from cards where cardno='6888371800000065125') where customid='00892542';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065152';
insert into customs_c values ('00897686',(select customid from cards where cardno='6888371800000065152'));
update account set customid=(select customid from cards where cardno='6888371800000065152') where accountid='02084002        ';
update account set customid=(select customid from cards where cardno='6888371800000065152') where accountid='02084003        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065152') where customid='00897686';
update quancz set customid=(select customid from cards where cardno='6888371800000065152') where customid='00897686';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000058755';
insert into customs_c values ('00910658',(select customid from cards where cardno='6888371800000058755'));
update account set customid=(select customid from cards where cardno='6888371800000058755') where accountid='10062905        ';
update account set customid=(select customid from cards where cardno='6888371800000058755') where accountid='10062906        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000058755') where customid='00910658';
update quancz set customid=(select customid from cards where cardno='6888371800000058755') where customid='00910658';
update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000058760';
insert into customs_c values ('00910658',(select customid from cards where cardno='6888371800000058760'));
update account set customid=(select customid from cards where cardno='6888371800000058760') where accountid='02122933        ';
update account set customid=(select customid from cards where cardno='6888371800000058760') where accountid='02122934        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000058760') where customid='00910658';
update quancz set customid=(select customid from cards where cardno='6888371800000058760') where customid='00910658';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000059017';
insert into customs_c values ('00936464',(select customid from cards where cardno='6888371800000059017'));
update account set customid=(select customid from cards where cardno='6888371800000059017') where accountid='02200092        ';
update account set customid=(select customid from cards where cardno='6888371800000059017') where accountid='02200093        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000059017') where customid='00936464';
update quancz set customid=(select customid from cards where cardno='6888371800000059017') where customid='00936464';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065081';
insert into customs_c values ('00937090',(select customid from cards where cardno='6888371800000065081'));
update account set customid=(select customid from cards where cardno='6888371800000065081') where accountid='10064258        ';
update account set customid=(select customid from cards where cardno='6888371800000065081') where accountid='10064259        ';
update account set customid=(select customid from cards where cardno='6888371800000065081') where accountid='02201892        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065081') where customid='00937090';
update quancz set customid=(select customid from cards where cardno='6888371800000065081') where customid='00937090';
delete from  account where accountid='10063260        ';
delete from  account where accountid='10063261        ';
delete from  account where accountid='10066336        ';
delete from  account where accountid='10066337        ';
delete from  account where accountid='10068157        ';
delete from  account where accountid='10068158        ';
delete from  account where accountid='02201890        ';
delete from  account where accountid='02201891        ';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065053';
insert into customs_c values ('00937243',(select customid from cards where cardno='6888371800000065053'));
update account set customid=(select customid from cards where cardno='6888371800000065053') where accountid='10063768        ';
update account set customid=(select customid from cards where cardno='6888371800000065053') where accountid='10063769        ';
update account set customid=(select customid from cards where cardno='6888371800000065053') where accountid='02202409        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065053') where customid='00937243';
update quancz set customid=(select customid from cards where cardno='6888371800000065053') where customid='00937243';
delete from  account where accountid='10063192        ';
delete from  account where accountid='10063193        ';
delete from  account where accountid='10066286        ';
delete from  account where accountid='10066287        ';
delete from  account where accountid='10068107        ';
delete from  account where accountid='10068108        ';
delete from  account where accountid='02202407        ';
delete from  account where accountid='02202408        ';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065066';
insert into customs_c values ('00938345',(select customid from cards where cardno='6888371800000065066'));
update account set customid=(select customid from cards where cardno='6888371800000065066') where accountid='10064190        ';
update account set customid=(select customid from cards where cardno='6888371800000065066') where accountid='10064191        ';
update account set customid=(select customid from cards where cardno='6888371800000065066') where accountid='02205678        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065066') where customid='00938345';
update quancz set customid=(select customid from cards where cardno='6888371800000065066') where customid='00938345';
delete from  account where accountid='10063214        ';
delete from  account where accountid='10063235        ';
delete from  account where accountid='10066308        ';
delete from  account where accountid='10066309        ';
delete from  account where accountid='10068129        ';
delete from  account where accountid='10068130        ';
delete from  account where accountid='02205676        ';
delete from  account where accountid='02205677        ';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065109';
insert into customs_c values ('00938842',(select customid from cards where cardno='6888371800000065109'));
update account set customid=(select customid from cards where cardno='6888371800000065109') where accountid='02207207        ';
update account set customid=(select customid from cards where cardno='6888371800000065109') where accountid='02207208        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065109') where customid='00938842';
update quancz set customid=(select customid from cards where cardno='6888371800000065109') where customid='00938842';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065060';
insert into customs_c values ('00939290',(select customid from cards where cardno='6888371800000065060'));
update account set customid=(select customid from cards where cardno='6888371800000065060') where accountid='02208513        ';
update account set customid=(select customid from cards where cardno='6888371800000065060') where accountid='02208514        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065060') where customid='00939290';
update quancz set customid=(select customid from cards where cardno='6888371800000065060') where customid='00939290';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000059031';
insert into customs_c values ('01019485',(select customid from cards where cardno='6888371800000059031'));
update account set customid=(select customid from cards where cardno='6888371800000059031') where accountid='02447273        ';
update account set customid=(select customid from cards where cardno='6888371800000059031') where accountid='02447274        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000059031') where customid='01019485';
update quancz set customid=(select customid from cards where cardno='6888371800000059031') where customid='01019485';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065082';
insert into customs_c values ('01042735',(select customid from cards where cardno='6888371800000065082'));
update account set customid=(select customid from cards where cardno='6888371800000065082') where accountid='10062740        ';
update account set customid=(select customid from cards where cardno='6888371800000065082') where accountid='10062741        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065082') where customid='01042735';
update quancz set customid=(select customid from cards where cardno='6888371800000065082') where customid='01042735';
delete from  account where accountid='10066338        ';
delete from  account where accountid='10066339        ';
delete from  account where accountid='10068159        ';
delete from  account where accountid='10068160        ';
delete from  account where accountid='02516036        ';
delete from  account where accountid='02516037        ';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000059035';
insert into customs_c values ('01045868',(select customid from cards where cardno='6888371800000059035'));
update account set customid=(select customid from cards where cardno='6888371800000059035') where accountid='02525310        ';
update account set customid=(select customid from cards where cardno='6888371800000059035') where accountid='02525311        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000059035') where customid='01045868';
update quancz set customid=(select customid from cards where cardno='6888371800000059035') where customid='01045868';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065117';
insert into customs_c values ('01078111',(select customid from cards where cardno='6888371800000065117'));
update account set customid=(select customid from cards where cardno='6888371800000065117') where accountid='02621444        ';
update account set customid=(select customid from cards where cardno='6888371800000065117') where accountid='02621445        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065117') where customid='01078111';
update quancz set customid=(select customid from cards where cardno='6888371800000065117') where customid='01078111';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065090';
insert into customs_c values ('01089665',(select customid from cards where cardno='6888371800000065090'));
update account set customid=(select customid from cards where cardno='6888371800000065090') where accountid='10068173        ';
update account set customid=(select customid from cards where cardno='6888371800000065090') where accountid='10068174        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065090') where customid='01089665';
update quancz set customid=(select customid from cards where cardno='6888371800000065090') where customid='01089665';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000058780';
insert into customs_c values ('01091007',(select customid from cards where cardno='6888371800000058780'));
update account set customid=(select customid from cards where cardno='6888371800000058780') where accountid='10062957        ';
update account set customid=(select customid from cards where cardno='6888371800000058780') where accountid='10062958        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000058780') where customid='01091007';
update quancz set customid=(select customid from cards where cardno='6888371800000058780') where customid='01091007';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065725';
insert into customs_c values ('01101640',(select customid from cards where cardno='6888371800000065725'));
update account set customid=(select customid from cards where cardno='6888371800000065725') where accountid='10090143        ';
update account set customid=(select customid from cards where cardno='6888371800000065725') where accountid='10090144        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065725') where customid='01101640';
update quancz set customid=(select customid from cards where cardno='6888371800000065725') where customid='01101640';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000058858';
insert into customs_c values ('01153902',(select customid from cards where cardno='6888371800000058858'));
update account set customid=(select customid from cards where cardno='6888371800000058858') where accountid='02844483        ';
update account set customid=(select customid from cards where cardno='6888371800000058858') where accountid='02844484        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000058858') where customid='01153902';
update quancz set customid=(select customid from cards where cardno='6888371800000058858') where customid='01153902';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000059030';
insert into customs_c values ('01359652',(select customid from cards where cardno='6888371800000059030'));
update account set customid=(select customid from cards where cardno='6888371800000059030') where accountid='03460731        ';
update account set customid=(select customid from cards where cardno='6888371800000059030') where accountid='03460732        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000059030') where customid='01359652';
update quancz set customid=(select customid from cards where cardno='6888371800000059030') where customid='01359652';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065180';
insert into customs_c values ('01369989',(select customid from cards where cardno='6888371800000065180'));
update account set customid=(select customid from cards where cardno='6888371800000065180') where accountid='08845464        ';
update account set customid=(select customid from cards where cardno='6888371800000065180') where accountid='08845465        ';
update account set customid=(select customid from cards where cardno='6888371800000065180') where accountid='08845466        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065180') where customid='01369989';
update quancz set customid=(select customid from cards where cardno='6888371800000065180') where customid='01369989';
delete from  account where accountid='10064558        ';
delete from  account where accountid='10064559        ';
delete from  account where accountid='10063402        ';
delete from  account where accountid='10063403        ';
delete from  account where accountid='10066496        ';
delete from  account where accountid='10066497        ';
delete from  account where accountid='10068317        ';
delete from  account where accountid='10068318        ';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065182';
insert into customs_c values ('01499134',(select customid from cards where cardno='6888371800000065182'));
update account set customid=(select customid from cards where cardno='6888371800000065182') where accountid='10064562        ';
update account set customid=(select customid from cards where cardno='6888371800000065182') where accountid='10064563        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065182') where customid='01499134';
update quancz set customid=(select customid from cards where cardno='6888371800000065182') where customid='01499134';
delete from  account where accountid='10063138        ';
delete from  account where accountid='10063139        ';
delete from  account where accountid='10066500        ';
delete from  account where accountid='10066501        ';
delete from  account where accountid='10068321        ';
delete from  account where accountid='10068322        ';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065606';
insert into customs_c values ('01662284',(select customid from cards where cardno='6888371800000065606'));
update account set customid=(select customid from cards where cardno='6888371800000065606') where accountid='10089975        ';
update account set customid=(select customid from cards where cardno='6888371800000065606') where accountid='10089976        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065606') where customid='01662284';
update quancz set customid=(select customid from cards where cardno='6888371800000065606') where customid='01662284';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065255';
insert into customs_c values ('01712951',(select customid from cards where cardno='6888371800000065255'));
update account set customid=(select customid from cards where cardno='6888371800000065255') where accountid='04515476        ';
update account set customid=(select customid from cards where cardno='6888371800000065255') where accountid='04515608        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065255') where customid='01712951';
update quancz set customid=(select customid from cards where cardno='6888371800000065255') where customid='01712951';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065729';
insert into customs_c values ('01734323',(select customid from cards where cardno='6888371800000065729'));
update account set customid=(select customid from cards where cardno='6888371800000065729') where accountid='10090151        ';
update account set customid=(select customid from cards where cardno='6888371800000065729') where accountid='10090152        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065729') where customid='01734323';
update quancz set customid=(select customid from cards where cardno='6888371800000065729') where customid='01734323';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000058757';
insert into customs_c values ('01908100',(select customid from cards where cardno='6888371800000058757'));
update account set customid=(select customid from cards where cardno='6888371800000058757') where accountid='05095257        ';
update account set customid=(select customid from cards where cardno='6888371800000058757') where accountid='05095258        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000058757') where customid='01908100';
update quancz set customid=(select customid from cards where cardno='6888371800000058757') where customid='01908100';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065732';
insert into customs_c values ('01942092',(select customid from cards where cardno='6888371800000065732'));
update account set customid=(select customid from cards where cardno='6888371800000065732') where accountid='05196860        ';
update account set customid=(select customid from cards where cardno='6888371800000065732') where accountid='05196861        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065732') where customid='01942092';
update quancz set customid=(select customid from cards where cardno='6888371800000065732') where customid='01942092';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000058790';
insert into customs_c values ('02010086',(select customid from cards where cardno='6888371800000058790'));
update account set customid=(select customid from cards where cardno='6888371800000058790') where accountid='05400332        ';
update account set customid=(select customid from cards where cardno='6888371800000058790') where accountid='05400333        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000058790') where customid='02010086';
update quancz set customid=(select customid from cards where cardno='6888371800000058790') where customid='02010086';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065130';
insert into customs_c values ('02056842',(select customid from cards where cardno='6888371800000065130'));
update account set customid=(select customid from cards where cardno='6888371800000065130') where accountid='10068245        ';
update account set customid=(select customid from cards where cardno='6888371800000065130') where accountid='10068246        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065130') where customid='02056842';
update quancz set customid=(select customid from cards where cardno='6888371800000065130') where customid='02056842';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065862';
insert into customs_c values ('02144870',(select customid from cards where cardno='6888371800000065862'));
update account set customid=(select customid from cards where cardno='6888371800000065862') where accountid='10090353        ';
update account set customid=(select customid from cards where cardno='6888371800000065862') where accountid='10090354        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065862') where customid='02144870';
update quancz set customid=(select customid from cards where cardno='6888371800000065862') where customid='02144870';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065861';
insert into customs_c values ('02152238',(select customid from cards where cardno='6888371800000065861'));
update account set customid=(select customid from cards where cardno='6888371800000065861') where accountid='10090351        ';
update account set customid=(select customid from cards where cardno='6888371800000065861') where accountid='10090352        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065861') where customid='02152238';
update quancz set customid=(select customid from cards where cardno='6888371800000065861') where customid='02152238';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065533';
insert into customs_c values ('02221824',(select customid from cards where cardno='6888371800000065533'));
update account set customid=(select customid from cards where cardno='6888371800000065533') where accountid='10089881        ';
update account set customid=(select customid from cards where cardno='6888371800000065533') where accountid='10089882        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065533') where customid='02221824';
update quancz set customid=(select customid from cards where cardno='6888371800000065533') where customid='02221824';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065039';
insert into customs_c values ('02270264',(select customid from cards where cardno='6888371800000065039'));
update account set customid=(select customid from cards where cardno='6888371800000065039') where accountid='06175162        ';
update account set customid=(select customid from cards where cardno='6888371800000065039') where accountid='06175163        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065039') where customid='02270264';
update quancz set customid=(select customid from cards where cardno='6888371800000065039') where customid='02270264';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065051';
insert into customs_c values ('02344451',(select customid from cards where cardno='6888371800000065051'));
update account set customid=(select customid from cards where cardno='6888371800000065051') where accountid='06397439        ';
update account set customid=(select customid from cards where cardno='6888371800000065051') where accountid='06397440        ';
update account set customid=(select customid from cards where cardno='6888371800000065051') where accountid='06397441        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065051') where customid='02344451';
update quancz set customid=(select customid from cards where cardno='6888371800000065051') where customid='02344451';
delete from  account where accountid='10063764        ';
delete from  account where accountid='10063765        ';
delete from  account where accountid='10063188        ';
delete from  account where accountid='10063189        ';
delete from  account where accountid='10066282        ';
delete from  account where accountid='10066283        ';
delete from  account where accountid='10068103        ';
delete from  account where accountid='10068104        ';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000058887';
insert into customs_c values ('02452668',(select customid from cards where cardno='6888371800000058887'));
update account set customid=(select customid from cards where cardno='6888371800000058887') where accountid='06719445        ';
update account set customid=(select customid from cards where cardno='6888371800000058887') where accountid='06719446        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000058887') where customid='02452668';
update quancz set customid=(select customid from cards where cardno='6888371800000058887') where customid='02452668';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065722';
insert into customs_c values ('02469675',(select customid from cards where cardno='6888371800000065722'));
update account set customid=(select customid from cards where cardno='6888371800000065722') where accountid='10090139        ';
update account set customid=(select customid from cards where cardno='6888371800000065722') where accountid='10090140        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065722') where customid='02469675';
update quancz set customid=(select customid from cards where cardno='6888371800000065722') where customid='02469675';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065056';
insert into customs_c values ('02545217',(select customid from cards where cardno='6888371800000065056'));
update account set customid=(select customid from cards where cardno='6888371800000065056') where accountid='06995799        ';
update account set customid=(select customid from cards where cardno='6888371800000065056') where accountid='06995800        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065056') where customid='02545217';
update quancz set customid=(select customid from cards where cardno='6888371800000065056') where customid='02545217';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065868';
insert into customs_c values ('02581467',(select customid from cards where cardno='6888371800000065868'));
update account set customid=(select customid from cards where cardno='6888371800000065868') where accountid='07104149        ';
update account set customid=(select customid from cards where cardno='6888371800000065868') where accountid='07104150        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065868') where customid='02581467';
update quancz set customid=(select customid from cards where cardno='6888371800000065868') where customid='02581467';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000058986';
insert into customs_c values ('02906355',(select customid from cards where cardno='6888371800000058986'));
update account set customid=(select customid from cards where cardno='6888371800000058986') where accountid='10092655        ';
update account set customid=(select customid from cards where cardno='6888371800000058986') where accountid='10092656        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000058986') where customid='02906355';
update quancz set customid=(select customid from cards where cardno='6888371800000058986') where customid='02906355';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065062';
insert into customs_c values ('03101425',(select customid from cards where cardno='6888371800000065062'));
update account set customid=(select customid from cards where cardno='6888371800000065062') where accountid='10068123        ';
update account set customid=(select customid from cards where cardno='6888371800000065062') where accountid='10068124        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065062') where customid='03101425';
update quancz set customid=(select customid from cards where cardno='6888371800000065062') where customid='03101425';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065052';
insert into customs_c values ('03103419',(select customid from cards where cardno='6888371800000065052'));
update account set customid=(select customid from cards where cardno='6888371800000065052') where accountid='08845848        ';
update account set customid=(select customid from cards where cardno='6888371800000065052') where accountid='08845849        ';
update account set customid=(select customid from cards where cardno='6888371800000065052') where accountid='08845850        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065052') where customid='03103419';
update quancz set customid=(select customid from cards where cardno='6888371800000065052') where customid='03103419';
delete from  account where accountid='10063766        ';
delete from  account where accountid='10063767        ';
delete from  account where accountid='10063190        ';
delete from  account where accountid='10063191        ';
delete from  account where accountid='10066284        ';
delete from  account where accountid='10066285        ';
delete from  account where accountid='10068105        ';
delete from  account where accountid='10068106        ';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065061';
insert into customs_c values ('03107732',(select customid from cards where cardno='6888371800000065061'));
update account set customid=(select customid from cards where cardno='6888371800000065061') where accountid='08565440        ';
update account set customid=(select customid from cards where cardno='6888371800000065061') where accountid='08565441        ';
update account set customid=(select customid from cards where cardno='6888371800000065061') where accountid='08565442        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065061') where customid='03107732';
update quancz set customid=(select customid from cards where cardno='6888371800000065061') where customid='03107732';
delete from  account where accountid='10064182        ';
delete from  account where accountid='10064183        ';
delete from  account where accountid='10063206        ';
delete from  account where accountid='10063207        ';
delete from  account where accountid='10066300        ';
delete from  account where accountid='10066301        ';
delete from  account where accountid='10068121        ';
delete from  account where accountid='10068122        ';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065138';
insert into customs_c values ('03117006',(select customid from cards where cardno='6888371800000065138'));
update account set customid=(select customid from cards where cardno='6888371800000065138') where accountid='08593124        ';
update account set customid=(select customid from cards where cardno='6888371800000065138') where accountid='08593125        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065138') where customid='03117006';
update quancz set customid=(select customid from cards where cardno='6888371800000065138') where customid='03117006';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000058895';
insert into customs_c values ('03139887',(select customid from cards where cardno='6888371800000058895'));
update account set customid=(select customid from cards where cardno='6888371800000058895') where accountid='08661619        ';
update account set customid=(select customid from cards where cardno='6888371800000058895') where accountid='08661620        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000058895') where customid='03139887';
update quancz set customid=(select customid from cards where cardno='6888371800000058895') where customid='03139887';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065156';
insert into customs_c values ('03200561',(select customid from cards where cardno='6888371800000065156'));
update account set customid=(select customid from cards where cardno='6888371800000065156') where accountid='08845989        ';
update account set customid=(select customid from cards where cardno='6888371800000065156') where accountid='08845990        ';
update account set customid=(select customid from cards where cardno='6888371800000065156') where accountid='08846011        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065156') where customid='03200561';
update quancz set customid=(select customid from cards where cardno='6888371800000065156') where customid='03200561';
delete from  account where accountid='10064474        ';
delete from  account where accountid='10064495        ';
delete from  account where accountid='10063366        ';
delete from  account where accountid='10063367        ';
delete from  account where accountid='10066452        ';
delete from  account where accountid='10066453        ';
delete from  account where accountid='10068273        ';
delete from  account where accountid='10068274        ';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065075';
insert into customs_c values ('03201478',(select customid from cards where cardno='6888371800000065075'));
update account set customid=(select customid from cards where cardno='6888371800000065075') where accountid='08845880        ';
update account set customid=(select customid from cards where cardno='6888371800000065075') where accountid='08845881        ';
update account set customid=(select customid from cards where cardno='6888371800000065075') where accountid='08845882        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065075') where customid='03201478';
update quancz set customid=(select customid from cards where cardno='6888371800000065075') where customid='03201478';
delete from  account where accountid='10064216        ';
delete from  account where accountid='10064217        ';
delete from  account where accountid='10064226        ';
delete from  account where accountid='10064227        ';
delete from  account where accountid='10063238        ';
delete from  account where accountid='10063239        ';
delete from  account where accountid='10063248        ';
delete from  account where accountid='10063249        ';
delete from  account where accountid='10066314        ';
delete from  account where accountid='10066315        ';
delete from  account where accountid='10066324        ';
delete from  account where accountid='10066325        ';
delete from  account where accountid='10068135        ';
delete from  account where accountid='10068136        ';
delete from  account where accountid='10068145        ';
delete from  account where accountid='10068146        ';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000058893';
insert into customs_c values ('03201987',(select customid from cards where cardno='6888371800000058893'));
update account set customid=(select customid from cards where cardno='6888371800000058893') where accountid='10092521        ';
update account set customid=(select customid from cards where cardno='6888371800000058893') where accountid='10092522        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000058893') where customid='03201987';
update quancz set customid=(select customid from cards where cardno='6888371800000058893') where customid='03201987';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000058892';
insert into customs_c values ('03201999',(select customid from cards where cardno='6888371800000058892'));
update account set customid=(select customid from cards where cardno='6888371800000058892') where accountid='10092519        ';
update account set customid=(select customid from cards where cardno='6888371800000058892') where accountid='10092520        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000058892') where customid='03201999';
update quancz set customid=(select customid from cards where cardno='6888371800000058892') where customid='03201999';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065581';
insert into customs_c values ('03223179',(select customid from cards where cardno='6888371800000065581'));
update account set customid=(select customid from cards where cardno='6888371800000065581') where accountid='10089935        ';
update account set customid=(select customid from cards where cardno='6888371800000065581') where accountid='10089936        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065581') where customid='03223179';
update quancz set customid=(select customid from cards where cardno='6888371800000065581') where customid='03223179';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000058779';
insert into customs_c values ('03234787',(select customid from cards where cardno='6888371800000058779'));
update account set customid=(select customid from cards where cardno='6888371800000058779') where accountid='10062955        ';
update account set customid=(select customid from cards where cardno='6888371800000058779') where accountid='10062956        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000058779') where customid='03234787';
update quancz set customid=(select customid from cards where cardno='6888371800000058779') where customid='03234787';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065262';
insert into customs_c values ('03249119',(select customid from cards where cardno='6888371800000065262'));
update account set customid=(select customid from cards where cardno='6888371800000065262') where accountid='08987937        ';
update account set customid=(select customid from cards where cardno='6888371800000065262') where accountid='08987938        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065262') where customid='03249119';
update quancz set customid=(select customid from cards where cardno='6888371800000065262') where customid='03249119';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065582';
insert into customs_c values ('03283853',(select customid from cards where cardno='6888371800000065582'));
update account set customid=(select customid from cards where cardno='6888371800000065582') where accountid='09091494        ';
update account set customid=(select customid from cards where cardno='6888371800000065582') where accountid='09091495        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065582') where customid='03283853';
update quancz set customid=(select customid from cards where cardno='6888371800000065582') where customid='03283853';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065609';
insert into customs_c values ('03307028',(select customid from cards where cardno='6888371800000065609'));
update account set customid=(select customid from cards where cardno='6888371800000065609') where accountid='09160552        ';
update account set customid=(select customid from cards where cardno='6888371800000065609') where accountid='09160553        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065609') where customid='03307028';
update quancz set customid=(select customid from cards where cardno='6888371800000065609') where customid='03307028';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000059005';
insert into customs_c values ('03307030',(select customid from cards where cardno='6888371800000059005'));
update account set customid=(select customid from cards where cardno='6888371800000059005') where accountid='09160558        ';
update account set customid=(select customid from cards where cardno='6888371800000059005') where accountid='09160559        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000059005') where customid='03307030';
update quancz set customid=(select customid from cards where cardno='6888371800000059005') where customid='03307030';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065605';
insert into customs_c values ('03307031',(select customid from cards where cardno='6888371800000065605'));
update account set customid=(select customid from cards where cardno='6888371800000065605') where accountid='09160561        ';
update account set customid=(select customid from cards where cardno='6888371800000065605') where accountid='09160562        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065605') where customid='03307031';
update quancz set customid=(select customid from cards where cardno='6888371800000065605') where customid='03307031';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065867';
insert into customs_c values ('03307032',(select customid from cards where cardno='6888371800000065867'));
update account set customid=(select customid from cards where cardno='6888371800000065867') where accountid='09160564        ';
update account set customid=(select customid from cards where cardno='6888371800000065867') where accountid='09160565        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065867') where customid='03307032';
update quancz set customid=(select customid from cards where cardno='6888371800000065867') where customid='03307032';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065863';
insert into customs_c values ('03307038',(select customid from cards where cardno='6888371800000065863'));
update account set customid=(select customid from cards where cardno='6888371800000065863') where accountid='09160602        ';
update account set customid=(select customid from cards where cardno='6888371800000065863') where accountid='09160603        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065863') where customid='03307038';
update quancz set customid=(select customid from cards where cardno='6888371800000065863') where customid='03307038';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000058927';
insert into customs_c values ('03307039',(select customid from cards where cardno='6888371800000058927'));
update account set customid=(select customid from cards where cardno='6888371800000058927') where accountid='09160584        ';
update account set customid=(select customid from cards where cardno='6888371800000058927') where accountid='09160585        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000058927') where customid='03307039';
update quancz set customid=(select customid from cards where cardno='6888371800000058927') where customid='03307039';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065973';
insert into customs_c values ('03307047',(select customid from cards where cardno='6888371800000065973'));
update account set customid=(select customid from cards where cardno='6888371800000065973') where accountid='09160628        ';
update account set customid=(select customid from cards where cardno='6888371800000065973') where accountid='09160629        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065973') where customid='03307047';
update quancz set customid=(select customid from cards where cardno='6888371800000065973') where customid='03307047';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065558';
insert into customs_c values ('03307058',(select customid from cards where cardno='6888371800000065558'));
update account set customid=(select customid from cards where cardno='6888371800000065558') where accountid='09160807        ';
update account set customid=(select customid from cards where cardno='6888371800000065558') where accountid='09160808        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065558') where customid='03307058';
update quancz set customid=(select customid from cards where cardno='6888371800000065558') where customid='03307058';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000058931';
insert into customs_c values ('03307061',(select customid from cards where cardno='6888371800000058931'));
update account set customid=(select customid from cards where cardno='6888371800000058931') where accountid='09160634        ';
update account set customid=(select customid from cards where cardno='6888371800000058931') where accountid='09160635        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000058931') where customid='03307061';
update quancz set customid=(select customid from cards where cardno='6888371800000058931') where customid='03307061';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065123';
insert into customs_c values ('03307063',(select customid from cards where cardno='6888371800000065123'));
update account set customid=(select customid from cards where cardno='6888371800000065123') where accountid='09160637        ';
update account set customid=(select customid from cards where cardno='6888371800000065123') where accountid='09160638        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065123') where customid='03307063';
update quancz set customid=(select customid from cards where cardno='6888371800000065123') where customid='03307063';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000058930';
insert into customs_c values ('03307064',(select customid from cards where cardno='6888371800000058930'));
update account set customid=(select customid from cards where cardno='6888371800000058930') where accountid='09160640        ';
update account set customid=(select customid from cards where cardno='6888371800000058930') where accountid='09160641        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000058930') where customid='03307064';
update quancz set customid=(select customid from cards where cardno='6888371800000058930') where customid='03307064';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000058928';
insert into customs_c values ('03307066',(select customid from cards where cardno='6888371800000058928'));
update account set customid=(select customid from cards where cardno='6888371800000058928') where accountid='09160658        ';
update account set customid=(select customid from cards where cardno='6888371800000058928') where accountid='09160659        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000058928') where customid='03307066';
update quancz set customid=(select customid from cards where cardno='6888371800000058928') where customid='03307066';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065201';
insert into customs_c values ('03307093',(select customid from cards where cardno='6888371800000065201'));
update account set customid=(select customid from cards where cardno='6888371800000065201') where accountid='09160747        ';
update account set customid=(select customid from cards where cardno='6888371800000065201') where accountid='09160748        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065201') where customid='03307093';
update quancz set customid=(select customid from cards where cardno='6888371800000065201') where customid='03307093';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065289';
insert into customs_c values ('03307099',(select customid from cards where cardno='6888371800000065289'));
update account set customid=(select customid from cards where cardno='6888371800000065289') where accountid='10063152        ';
update account set customid=(select customid from cards where cardno='6888371800000065289') where accountid='10063153        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065289') where customid='03307099';
update quancz set customid=(select customid from cards where cardno='6888371800000065289') where customid='03307099';
delete from  account where accountid='10066674        ';
delete from  account where accountid='10066675        ';
delete from  account where accountid='10068501        ';
delete from  account where accountid='10068502        ';
delete from  account where accountid='09160765        ';
delete from  account where accountid='09160766        ';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065199';
insert into customs_c values ('03307113',(select customid from cards where cardno='6888371800000065199'));
update account set customid=(select customid from cards where cardno='6888371800000065199') where accountid='10064612        ';
update account set customid=(select customid from cards where cardno='6888371800000065199') where accountid='10064613        ';
update account set customid=(select customid from cards where cardno='6888371800000065199') where accountid='09160852        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065199') where customid='03307113';
update quancz set customid=(select customid from cards where cardno='6888371800000065199') where customid='03307113';
delete from  account where accountid='10063432        ';
delete from  account where accountid='10063433        ';
delete from  account where accountid='10066530        ';
delete from  account where accountid='10066531        ';
delete from  account where accountid='10068351        ';
delete from  account where accountid='10068352        ';
delete from  account where accountid='09160830        ';
delete from  account where accountid='09160851        ';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065230';
insert into customs_c values ('03307117',(select customid from cards where cardno='6888371800000065230'));
update account set customid=(select customid from cards where cardno='6888371800000065230') where accountid='09160862        ';
update account set customid=(select customid from cards where cardno='6888371800000065230') where accountid='09160863        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065230') where customid='03307117';
update quancz set customid=(select customid from cards where cardno='6888371800000065230') where customid='03307117';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065197';
insert into customs_c values ('03307121',(select customid from cards where cardno='6888371800000065197'));
update account set customid=(select customid from cards where cardno='6888371800000065197') where accountid='09160839        ';
update account set customid=(select customid from cards where cardno='6888371800000065197') where accountid='09160840        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065197') where customid='03307121';
update quancz set customid=(select customid from cards where cardno='6888371800000065197') where customid='03307121';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065291';
insert into customs_c values ('03307128',(select customid from cards where cardno='6888371800000065291'));
update account set customid=(select customid from cards where cardno='6888371800000065291') where accountid='09160871        ';
update account set customid=(select customid from cards where cardno='6888371800000065291') where accountid='09160872        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065291') where customid='03307128';
update quancz set customid=(select customid from cards where cardno='6888371800000065291') where customid='03307128';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065192';
insert into customs_c values ('03307129',(select customid from cards where cardno='6888371800000065192'));
update account set customid=(select customid from cards where cardno='6888371800000065192') where accountid='09160874        ';
update account set customid=(select customid from cards where cardno='6888371800000065192') where accountid='09160875        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065192') where customid='03307129';
update quancz set customid=(select customid from cards where cardno='6888371800000065192') where customid='03307129';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065267';
insert into customs_c values ('03307131',(select customid from cards where cardno='6888371800000065267'));
update account set customid=(select customid from cards where cardno='6888371800000065267') where accountid='09160883        ';
update account set customid=(select customid from cards where cardno='6888371800000065267') where accountid='09160884        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065267') where customid='03307131';
update quancz set customid=(select customid from cards where cardno='6888371800000065267') where customid='03307131';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065198';
insert into customs_c values ('03307135',(select customid from cards where cardno='6888371800000065198'));
update account set customid=(select customid from cards where cardno='6888371800000065198') where accountid='09160938        ';
update account set customid=(select customid from cards where cardno='6888371800000065198') where accountid='09160939        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065198') where customid='03307135';
update quancz set customid=(select customid from cards where cardno='6888371800000065198') where customid='03307135';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000058899';
insert into customs_c values ('03307141',(select customid from cards where cardno='6888371800000058899'));
update account set customid=(select customid from cards where cardno='6888371800000058899') where accountid='09160894        ';
update account set customid=(select customid from cards where cardno='6888371800000058899') where accountid='09160895        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000058899') where customid='03307141';
update quancz set customid=(select customid from cards where cardno='6888371800000058899') where customid='03307141';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065563';
insert into customs_c values ('03307148',(select customid from cards where cardno='6888371800000065563'));
update account set customid=(select customid from cards where cardno='6888371800000065563') where accountid='09160915        ';
update account set customid=(select customid from cards where cardno='6888371800000065563') where accountid='09160916        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065563') where customid='03307148';
update quancz set customid=(select customid from cards where cardno='6888371800000065563') where customid='03307148';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065231';
insert into customs_c values ('03307153',(select customid from cards where cardno='6888371800000065231'));
update account set customid=(select customid from cards where cardno='6888371800000065231') where accountid='10064690        ';
update account set customid=(select customid from cards where cardno='6888371800000065231') where accountid='10064691        ';
update account set customid=(select customid from cards where cardno='6888371800000065231') where accountid='09160958        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065231') where customid='03307153';
update quancz set customid=(select customid from cards where cardno='6888371800000065231') where customid='03307153';
delete from  account where accountid='10063486        ';
delete from  account where accountid='10063487        ';
delete from  account where accountid='10066588        ';
delete from  account where accountid='10066589        ';
delete from  account where accountid='10068415        ';
delete from  account where accountid='10068416        ';
delete from  account where accountid='09160956        ';
delete from  account where accountid='09160957        ';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065076';
insert into customs_c values ('03307174',(select customid from cards where cardno='6888371800000065076'));
update account set customid=(select customid from cards where cardno='6888371800000065076') where accountid='10064228        ';
update account set customid=(select customid from cards where cardno='6888371800000065076') where accountid='10064229        ';
update account set customid=(select customid from cards where cardno='6888371800000065076') where accountid='09161074        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065076') where customid='03307174';
update quancz set customid=(select customid from cards where cardno='6888371800000065076') where customid='03307174';
delete from  account where accountid='10063250        ';
delete from  account where accountid='10063251        ';
delete from  account where accountid='10066326        ';
delete from  account where accountid='10066327        ';
delete from  account where accountid='10068147        ';
delete from  account where accountid='10068148        ';
delete from  account where accountid='09161072        ';
delete from  account where accountid='09161073        ';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065050';
insert into customs_c values ('03307176',(select customid from cards where cardno='6888371800000065050'));
update account set customid=(select customid from cards where cardno='6888371800000065050') where accountid='09161078        ';
update account set customid=(select customid from cards where cardno='6888371800000065050') where accountid='09161079        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065050') where customid='03307176';
update quancz set customid=(select customid from cards where cardno='6888371800000065050') where customid='03307176';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000059029';
insert into customs_c values ('03307180',(select customid from cards where cardno='6888371800000059029'));
update account set customid=(select customid from cards where cardno='6888371800000059029') where accountid='09160997        ';
update account set customid=(select customid from cards where cardno='6888371800000059029') where accountid='09160998        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000059029') where customid='03307180';
update quancz set customid=(select customid from cards where cardno='6888371800000059029') where customid='03307180';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065285';
insert into customs_c values ('03307181',(select customid from cards where cardno='6888371800000065285'));
update account set customid=(select customid from cards where cardno='6888371800000065285') where accountid='10064768        ';
update account set customid=(select customid from cards where cardno='6888371800000065285') where accountid='10064769        ';
update account set customid=(select customid from cards where cardno='6888371800000065285') where accountid='09161005        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065285') where customid='03307181';
update quancz set customid=(select customid from cards where cardno='6888371800000065285') where customid='03307181';
delete from  account where accountid='10063560        ';
delete from  account where accountid='10063561        ';
delete from  account where accountid='10066666        ';
delete from  account where accountid='10066667        ';
delete from  account where accountid='10068493        ';
delete from  account where accountid='10068494        ';
delete from  account where accountid='09161003        ';
delete from  account where accountid='09161004        ';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065583';
insert into customs_c values ('03307191',(select customid from cards where cardno='6888371800000065583'));
update account set customid=(select customid from cards where cardno='6888371800000065583') where accountid='09161021        ';
update account set customid=(select customid from cards where cardno='6888371800000065583') where accountid='09161022        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065583') where customid='03307191';
update quancz set customid=(select customid from cards where cardno='6888371800000065583') where customid='03307191';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000058788';
insert into customs_c values ('03307192',(select customid from cards where cardno='6888371800000058788'));
update account set customid=(select customid from cards where cardno='6888371800000058788') where accountid='09161056        ';
update account set customid=(select customid from cards where cardno='6888371800000058788') where accountid='09161057        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000058788') where customid='03307192';
update quancz set customid=(select customid from cards where cardno='6888371800000058788') where customid='03307192';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065129';
insert into customs_c values ('03307202',(select customid from cards where cardno='6888371800000065129'));
update account set customid=(select customid from cards where cardno='6888371800000065129') where accountid='09161094        ';
update account set customid=(select customid from cards where cardno='6888371800000065129') where accountid='09161095        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065129') where customid='03307202';
update quancz set customid=(select customid from cards where cardno='6888371800000065129') where customid='03307202';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065120';
insert into customs_c values ('03307206',(select customid from cards where cardno='6888371800000065120'));
update account set customid=(select customid from cards where cardno='6888371800000065120') where accountid='09161109        ';
update account set customid=(select customid from cards where cardno='6888371800000065120') where accountid='09161110        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065120') where customid='03307206';
update quancz set customid=(select customid from cards where cardno='6888371800000065120') where customid='03307206';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000059028';
insert into customs_c values ('03307217',(select customid from cards where cardno='6888371800000059028'));
update account set customid=(select customid from cards where cardno='6888371800000059028') where accountid='09161136        ';
update account set customid=(select customid from cards where cardno='6888371800000059028') where accountid='09161137        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000059028') where customid='03307217';
update quancz set customid=(select customid from cards where cardno='6888371800000059028') where customid='03307217';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000058791';
insert into customs_c values ('03307218',(select customid from cards where cardno='6888371800000058791'));
update account set customid=(select customid from cards where cardno='6888371800000058791') where accountid='09161142        ';
update account set customid=(select customid from cards where cardno='6888371800000058791') where accountid='09161143        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000058791') where customid='03307218';
update quancz set customid=(select customid from cards where cardno='6888371800000058791') where customid='03307218';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000059019';
insert into customs_c values ('03307222',(select customid from cards where cardno='6888371800000059019'));
update account set customid=(select customid from cards where cardno='6888371800000059019') where accountid='09161156        ';
update account set customid=(select customid from cards where cardno='6888371800000059019') where accountid='09161157        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000059019') where customid='03307222';
update quancz set customid=(select customid from cards where cardno='6888371800000059019') where customid='03307222';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000058787';
insert into customs_c values ('03307252',(select customid from cards where cardno='6888371800000058787'));
update account set customid=(select customid from cards where cardno='6888371800000058787') where accountid='09161207        ';
update account set customid=(select customid from cards where cardno='6888371800000058787') where accountid='09161208        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000058787') where customid='03307252';
update quancz set customid=(select customid from cards where cardno='6888371800000058787') where customid='03307252';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000058933';
insert into customs_c values ('03344144',(select customid from cards where cardno='6888371800000058933'));
update account set customid=(select customid from cards where cardno='6888371800000058933') where accountid='10092581        ';
update account set customid=(select customid from cards where cardno='6888371800000058933') where accountid='10092582        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000058933') where customid='03344144';
update quancz set customid=(select customid from cards where cardno='6888371800000058933') where customid='03344144';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065139';
insert into customs_c values ('03484272',(select customid from cards where cardno='6888371800000065139'));
update account set customid=(select customid from cards where cardno='6888371800000065139') where accountid='10068261        ';
update account set customid=(select customid from cards where cardno='6888371800000065139') where accountid='10068262        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065139') where customid='03484272';
update quancz set customid=(select customid from cards where cardno='6888371800000065139') where customid='03484272';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065131';
insert into customs_c values ('03512605',(select customid from cards where cardno='6888371800000065131'));
update account set customid=(select customid from cards where cardno='6888371800000065131') where accountid='10064428        ';
update account set customid=(select customid from cards where cardno='6888371800000065131') where accountid='10064429        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065131') where customid='03512605';
update quancz set customid=(select customid from cards where cardno='6888371800000065131') where customid='03512605';
delete from  account where accountid='10062748        ';
delete from  account where accountid='10062749        ';
delete from  account where accountid='10066426        ';
delete from  account where accountid='10066427        ';
delete from  account where accountid='10068247        ';
delete from  account where accountid='10068248        ';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065092';
insert into customs_c values ('03641539',(select customid from cards where cardno='6888371800000065092'));
update account set customid=(select customid from cards where cardno='6888371800000065092') where accountid='10064298        ';
update account set customid=(select customid from cards where cardno='6888371800000065092') where accountid='10064299        ';
update account set customid=(select customid from cards where cardno='6888371800000065092') where accountid='10060212        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065092') where customid='03641539';
update quancz set customid=(select customid from cards where cardno='6888371800000065092') where customid='03641539';
delete from  account where accountid='10063278        ';
delete from  account where accountid='10063279        ';
delete from  account where accountid='10066356        ';
delete from  account where accountid='10066357        ';
delete from  account where accountid='10060210        ';
delete from  account where accountid='10060211        ';
delete from  account where accountid='10068177        ';
delete from  account where accountid='10068178        ';




update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='6888371800000065073';
insert into customs_c values ('03642898',(select customid from cards where cardno='6888371800000065073'));
update account set customid=(select customid from cards where cardno='6888371800000065073') where accountid='10062738        ';
update account set customid=(select customid from cards where cardno='6888371800000065073') where accountid='10062739        ';
update quan_account set customid=(select customid from cards where cardno='6888371800000065073') where customid='03642898';
update quancz set customid=(select customid from cards where cardno='6888371800000065073') where customid='03642898';
delete from  account where accountid='10066312        ';
delete from  account where accountid='10066313        ';
delete from  account where accountid='10068133        ';
delete from  account where accountid='10068134        ';
delete from  account where accountid='10068143        ';
delete from  account where accountid='10068144        ';




