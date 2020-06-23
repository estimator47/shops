$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
})

/*$(document).ready(function(){
   $(document).ready(function(){
    $('.product').css('opacity', 0.7)
    .mouseover(function() {
      $(this).css('opacity', 1);
    })
    .mouseout(function() {
      $(this).css('opacity', 0.7);
 });


});*/


var BaseRecord={
search: function(name){
   var ajaxSetting={
      method: 'get',
      url: '/', //vagrant ./
      data: {
         search: name,
      },
      success: function(data){
         //alert(data.table);
          $('.product-list .row').html(data.table);
      },
   };
   $.ajax(ajaxSetting);	   
},

top9: 1,
more: function(top9){
   var ajaxSetting={
      method: 'get',
      url: '/', //vagrant ./
      data: {
         top9: this.top9,
      },
      success: function(data){
         //alert(data.table);
          $('.product-list .row').html(data.table);
      },
   };
   $.ajax(ajaxSetting);    
},

clearall: function(){
     var ajaxSetting={
        method: 'post',
        url: '/clearall',
        success: function(data){
           //alert(data);
           BaseRecord.cart();

        },
     };
     $.ajax(ajaxSetting); 
  },

clearone: function(id){
   var ajaxSetting={
      method: 'post',
      url: '/clearone',
      data: {
         id: id,
      },
      success: function(data){
         //alert(data);
         BaseRecord.cart();

      },
   };
   $.ajax(ajaxSetting); 
},

cart: function(){ 
   var ajaxSetting={
      method: 'get',
      url: '/cart',
      success: function(data){
         $('.tbody-cart').html(data.table);
         $('.listbuttonremove').click(function(){ 
            BaseRecord.clearone($(this).attr('id'));
            return false;
         });         
      },
   };
   $.ajax(ajaxSetting); 
},

mailer: function(email){
   var ajaxSetting={
      method: 'post',
      url: '/mailer',
      data: {
         email: email,
      },
      success: function(data){
         //alert(data);
         if(data.answer){
         var data_json=JSON.parse(data.answer);
         if(data_json['mail']) $('.subscribe-span').html('We sent a message to your email!').css('color', 'green');
       } else {
            var data_json=JSON.parse(data);
            var error_str='';
            for(var i in data_json){
            error_str+=data_json[i];
          }
          //alert(error_str);
          $('.subscribe-span').html(error_str).css('color', 'red');
       }

      },
      error: function(data){
                alert(data.responseText);
      }, 
   };
   $.ajax(ajaxSetting);
   
},

destroy: function(id){
   var ajaxSetting={
      method: 'delete',
      url: '/products/' +id,
      success: function(data){
         //alert(data);
         $('#back-pannel').html(data.table);
         $('.listbuttonremove').click(function(){
         BaseRecord.destroy($(this).attr('id'));
         return false;
           });

      },
   };
   $.ajax(ajaxSetting); 
},

};

