/*************************************************************************

    chm2web Javascript Help Contents Viewer 1.50
    Copyright (c) 2002-2004 A!K Research Labs (http://www.aklabs.com)  
    http://chm2web.aklabs.com - HTML Help Conversion Utility

    Tested with: Internet Explorer 5-6, Opera 6-7, Safari, Mozilla 
    Best viewed with: Internet Explorer 5+, Mozilla 1.x+, Safari

    ATTENTION! You can use this script only with web help system 
               generated by chm2web software.  
               
**************************************************************************/

var licons={
'target':'content',
'ic_e':'images/0.gif',
'ic_l':'images/90.gif',
'ic_2':'images/91.gif',
'ic_3':'images/92.gif',
'ic_4':'images/99.gif',
'ic_18':'images/93.gif',
'ic_19':'images/94.gif',
'ic_20':'images/97.gif',
'ic_26':'images/95.gif',
'ic_27':'images/96.gif',
'ic_28':'images/98.gif'
};
var n=true;
var trees=[];
get_element=document.all?
function(s_id){return document.all[s_id]}:
function(s_id){return document.getElementById(s_id)};
function DHTMLSupported(){
try{
var tmp="";
tmp=document.body.innerHTML;
if(tmp.length<=0)return false;
}catch(e){
return false;
}
return true;
}
function GetIcon(ad){
if(!ad){
cur=this.l[2];
if(this.o){
if((cur=='1')||(cur=='2'))cur='2';
if((cur=='3')||(cur=='4'))cur='4';
if((cur=='5')||(cur=='6'))cur='6';
if((cur=='7')||(cur=='8'))cur='8';
};
if(!this.o){
if((cur=='1')||(cur=='2'))cur='1';
if((cur=='3')||(cur=='4'))cur='3';
if((cur=='5')||(cur=='6'))cur='5';
if((cur=='7')||(cur=='8'))cur='7';
};
return'images/'+cur+'.gif';
}else{
return licons['ic_'+(
(this.d.length?16:0)+
(this.d.length&&this.o?8:0)+
(this.is_last()?1:0)+
(this.is_first()?2:0)+2)];
}
}
function TreeNode(k,n_order){
this.n_depth=k.n_depth+1;
this.l=k.l[n_order+(this.n_depth?3:0)];
if(!this.l)return;
this.g=k.g;
this.k=k;
this.n_order=n_order;
this.o=n;
this.n_id=this.g.q.length;
this.g.q[this.n_id]=this;
k.d[n_order]=this;
this.d=[];
for(var i=0;i<this.l.length-2;i++)
new TreeNode(this,i);
this.get_icon=GetIcon;
this.open=OIt;
this.select=FIt;
this.init=IIt;
this.is_last=function(){
return this.n_order==this.k.d.length-1};
this.is_first=function(){
return(this.n_depth==0)&&(this.n_order==0)&&(!this.is_last())};
}
function OIt(z){
var d=[];
var v=get_element('divtree'+this.n_id);
if(!v)return;
if(n){
document.write(d.join(''));
for(var i=0;i<this.d.length;i++){
document.write(this.d[i].init());
this.d[i].open();
}
}else{
if(!v.innerHTML){
for(var i=0;i<this.d.length;i++)
d[i]=this.d[i].init();
v.innerHTML=d.join('');
}
v.style.display=(z?'none':'block');
this.o=!z;
var ab=document.images['j_img'+this.n_id],
p=document.images['i_img'+this.n_id];
if(ab)ab.src=this.get_icon(true);
if(p)p.src=this.get_icon();
}
}
function FIt(u){
if(!u){
var x=this.g.m;
this.g.m=this;
if(x)x.select(true);
chmtop.c2wtopf.pagenum=this.n_id;
}
var p=document.images['i_img'+this.n_id];
if(p)p.src=this.get_icon();
get_element('i_txt'+this.n_id).style.fontWeight=u?'normal':'bold';
return Boolean(this.l[1]);
}
function MakeTree(itm,ac){
n=!DHTMLSupported();this.l=itm;
this.g=this;this.q=[];this.m=null;
this.n_depth=-1;
var aa=new Image(),
o_iconl=new Image();
aa.src=licons['ic_e'];
o_iconl.src=licons['ic_l'];
licons['im_e']=aa;
licons['im_l']=o_iconl;
for(var i=0;i<64;i++)
if(licons['ic_'+i]){
var af=new Image();
licons['im_'+i]=af;
af.src=licons['ic_'+i];
}
this.select=function(n_id){return this.q[n_id].select();};
this.toggle=function(n_id){var ae=this.q[n_id];
ae.open(ae.o)};
this.d=[];
var itm=this.l;
for(var i=0;i<itm.length;i++){
new TreeNode(this,i);
}
this.n_id=trees.length;
trees[this.n_id]=this;
for(var i=0;i<this.d.length;i++){
document.write(this.d[i].init());
if(ac||!DHTMLSupported())this.d[i].open();
}
this.dOpenTreeNode=dOpenTreeNode;
this.OpenTreeNode=OpenTreeNode;
}
function IIt(){
var y=[],
o_current_item=this.k;
for(var i=this.n_depth;i>0;i--){
y[i]='<img src="'+licons[o_current_item.is_last()?'ic_e':'ic_l']+'" border="0" align="absbottom">';
o_current_item=o_current_item.k;
}
return'<a name="#i_txt'+this.n_id+'"></a><table cellpadding="0" cellspacing="0" border="0"><tr><td nowrap>'+
y.join('')+(this.d.length?
(n?'':'<a href="javascript: trees['+this.g.n_id+'].toggle('+this.n_id+
')" >')+'<img src="'+this.get_icon(true)+'" border="0" align="absbottom" name="j_img'+this.n_id+
'">'+
(n?'':'</a>'):'<img src="'+this.get_icon(true)+
'" border="0" align="absbottom">')+
'<a href="'+this.l[1]+
'" target="'+licons['target']+'"'+
' onclick="return trees['+this.g.n_id+'].select('+this.n_id+');" '+
(n?'':' ondblclick="trees['+
this.g.n_id+'].toggle('+this.n_id+')"')+' class="t0i" id="i_txt'+
this.n_id+'"><img src="'+this.get_icon()+'" border="0" align="absbottom" name="i_img'+
this.n_id+'" class="t0im">&nbsp;'+
this.l[0]+'</td></tr></table>'+(this.d.length?
'<div id="divtree'+this.n_id+'" style="display:none"></div>':'');
}
function OpenTreeNode(filename)
{
if(this.g!=null&&this.g.m!=null&&
this.g.m.l[1]==filename){
return;
}
CheckNode(filename,this);
}
function CheckNode(filename,itm)
{
for(var i=0;i<itm.d.length;i++){
if(itm.d[i].o)
itm.d[i].open(false);
if(filename==itm.d[i].l[1]){
OpenDownTo(itm.d[i]);
itm.d[i].select(false);
}
CheckNode(filename,itm.d[i]);
}
}
var OutRes=0;
function dOpenTreeNode(id)
{
if(this.g!=null&&this.g.m!=null&&
this.g.m.n_id==id)return;
OutRes=-1;
dCheckNode(id,this);
return OutRes;
}
function dCheckNode(id,itm,obj)
{
for(var i=0;i<itm.d.length;i++){
if(itm.d[i].o)
itm.d[i].open(false);
if(id==itm.d[i].n_id){
OpenDownTo(itm.d[i]);
itm.d[i].select(false);
OutRes=id;
return;
};
dCheckNode(id,itm.d[i]);
};
}
function OpenDownTo(node)
{
if(!node.n_depth)
return;
OpenDownTo(node.k);
node.k.open(false);
}
