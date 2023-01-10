{{-- &lt;
&gt; --}}

<h5>Asynchronní získání dat v JS pomocí AJAX </h5>
  <pre>
    <code>
        function func_ajax_Data(url){
            $.ajax({
               url: url,
               dataType: "json",
               method: 'get',
               success: function (data) {
                   if((data != '')) {
                       for (i = 0; i < data.length; i++) {
                           let thisElement = $('#rowNoFin_id_' + data[i]['id']);
                               if(thisElement){
                                   thisElement.attr('hidden', 'hidden');
                               }
                       }  
                   }
               },
               error: function(){
                   alert('Failure ... \n\n error xy');
                   
               }
           });
           }
    </code>
  </pre>