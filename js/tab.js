window.onload=function()   //onload �¼�������ĵ�װ�ؽ���ʱ����

{ 
  var tag=document.getElementById("tag").children; //��ȡTag�µ�li����Tag��ǩ 
  var content=document.getElementById("tagContent").children; //��ȡTag��ǩ��Ӧ������ 
  content[0].style.display = "block"; //Ĭ����ʾ��һ����ǩ������ 
  var len= tag.length; 
  for(var i=0; i<len; i++)   //���۵��˭����ʵ�ֵ�ǰ��ʾ����������
    { 
    tag[i].index=i; //Ϊ����ˣ�����������ͣ� 
    tag[i].onclick = function()     //0��DOM���¼����ע��

        {     

               for(var n=0; n<len; n++)

               {
                  tag[n].className="";
                  content[n].style.display="none"; 
                }   //���Ƚ�ȫ����div����
            tag[this.index].className = "current"; 
            content[this.index].style.display = "block"; 
      } 
   }

}