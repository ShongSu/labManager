<script type="text/javascript"> 
//** iframe�Զ���Ӧҳ�� **// 
//������ϣ������ҳ��߶��Զ������߶ȵ�iframe�����Ƶ��б� 
//�ö��Ű�ÿ��iframe��ID�ָ�. ����: ["myframe1", "myframe2"]������ֻ��һ�����壬���ö��š� 
//����iframe��ID 
var iframeids=["test"] 
//����û����������֧��iframe�Ƿ�iframe���� yes ��ʾ���أ�no��ʾ������ 
var iframehide="yes" 
function dyniframesize() 
{ 
var dyniframe=new Array() 
for (i=0; i<iframeids.length; i++) 
{ 
if (document.getElementById) 
{ 
//�Զ�����iframe�߶� 
dyniframe[dyniframe.length] = document.getElementById(iframeids); 
if (dyniframe && !window.opera) 
{ 
dyniframe.style.display="block" 
if (dyniframe.contentDocument && dyniframe.contentDocument.body.offsetHeight) //����û����������NetScape 
dyniframe.height = dyniframe.contentDocument.body.offsetHeight; 
else if (dyniframe.Document && dyniframe.Document.body.scrollHeight) //����û����������IE 
dyniframe.height = dyniframe.Document.body.scrollHeight; 
} 
} 
//�����趨�Ĳ���������֧��iframe�����������ʾ���� 
if ((document.all || document.getElementById) && iframehide=="no") 
{ 
var tempobj=document.all? document.all[iframeids] : document.getElementById(iframeids) 
tempobj.style.display="block" 
} 
} 
} 
if (window.addEventListener) 
window.addEventListener("load", dyniframesize, false) 
else if (window.attachEvent) 
window.attachEvent("onload", dyniframesize) 
else 
window.onload=dyniframesize 
</script> 

<iframe id='test' src="https://docs.google.com/document/d/1Ej7qnYwGAzL7B4Op6oCk6Pi4t7bOjBNW0viQjJTsJgg/pub?embedded=true"></iframe>