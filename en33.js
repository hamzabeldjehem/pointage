var s=document.getElementById('s');
var jour=document.getElementById('jour');
var nom=document.getElementById('nom');
var pre=document.getElementById('pre');
var etat=document.getElementById('etat');
var heur=document.getElementById('heur');
var sp=document.getElementById('sp');
var sss=document.getElementById('sss');
var abc=document.getElementById('abc');
var nb=document.getElementById('nb');
myform.addEventListener("submit",f);
function init(){
document.fm.nom.focus();
}
function f(e){
if(s.value==''){
e.preventDefault();
document.fm.s.focus();
e.style.color='red';
}
if(sp.value==''){
e.preventDefault();
document.fm.nom.focus();
e.style.color='red';
}
if(jour.value==''){
e.preventDefault();
document.fm.jour.focus();
e.style.color='red';}
if(jour.value<=0){
e.preventDefault();
document.fm.jour.focus();
e.style.color='red';}
if(jour.value>31){
e.preventDefault();
document.fm.jour.focus();
e.style.color='red';}

if(s.value=='avril 2020' && jour.value=='31' || s.value=='juin 2020'  && jour.value=='31' ||  s.value=='septembre 2020' && jour.value=='31' || s.value=='novembre 2020' && jour.value=='31'){
e.preventDefault();
abc.textContent = 'Ce mois contient 30 jours maximum!';
document.fm.jour.focus();
abc.style.color='red';
e.style.color='red';}
else abc.textContent = '';

if(nom.value=='' ){
e.preventDefault();
document.fm.nom.focus();
e.style.color='red';}
if(pre.value==''){
e.preventDefault();
document.fm.pre.focus();
e.style.color='red';}
if(etat.value==''){
e.preventDefault();
document.fm.etat.focus();
e.style.color='red';}
if(heur.value==''){
e.preventDefault();
document.fm.heur.focus();
e.style.color='red';}
}

function un(event) {
  if (event.keyCode == 32){
  location.href = 'entreepj2.php';
  }}
  function deu(event) {
  if (event.keyCode == 32){
  location.href = 'entreepj2.php';
  }}
  function tr(event) {
  if (event.keyCode == 32){
  location.href = 'entreepj2.php';
  }}
  function qut(event) {
  if (event.keyCode == 32){
  location.href = 'entreepj2.php';
  }}
  function cin(event) {
  if (event.keyCode == 32){
  location.href = 'entreepj2.php';
  }}
  function six(event) {
	  
  if (event.keyCode == 32){
  location.href = 'entreepj.php';
  }}
