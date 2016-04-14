var currentDate = new Date()
    var day = currentDate.getDate() 
    var month = currentDate.getMonth() + 1
    var year = currentDate.getFullYear()
    document.write("<b> Today's date is " + month + "/" + day + "/" + year + "</b><br />")
    document.write("<b> Any transaction will be effective with tomorrow's date" + "</b><br />")
    
    var tomDate = new Date()
    var day = currentDate.getDate() +1
    var month = currentDate.getMonth() + 1
    var year = currentDate.getFullYear()
    document.write("<b> Tomorrow's date is " + month + "/" + day + "/" + year + "</b><br />")  
  

