$(document).ready(function(){
$('#loader').hide()
    console.log("page loaded")
  
    $('#insert').submit(function(e){
      e.preventDefault()
      
      var title = $('#title').val()
      var description = $('#description').val()
      var year = $('#year').val()
      var errormessage = $('#errormessage')
      if(title == ""){
      
        console.log("title is empty")
        errormessage.text("title is empty");
      }
      else if(description == ""){
        console.log("description is empty")
      }
      else if(year == ""){
        console.log("year is empty")
      }
      else{
        errormessage.text("");
        console.log("form filled")
  
  
      $.ajax({
      url:"task1ajax.php",
      method:"POST",
      data:{
        title : title,
        decription : description,
        year : year
      },
      dataType:"JSON",
      success:function(data)
      {
        
        if(data.success == 1){
          errormessage.text(data.message);
            
          $('#loader').show().delay(1000).fadeOut()    
            window.location = 'index.php';
        }else{
          errormessage.text(data.message);
        }
       // console.log(data.success)
      }

     }) 
  
  
      }
  
    })

  })