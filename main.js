filename = 'AB002309525.tif';

$(function () {
    Tiff.initialize({TOTAL_MEMORY: 16777216 * 10});
    var xhr = new XMLHttpRequest();
    
    xhr.open('GET', filename);
    xhr.responseType = 'arraybuffer';
    xhr.onload = function (e) {
      var buffer = xhr.response;
      var tiff = new Tiff({buffer: buffer});
      for (var i = 0, len = tiff.countDirectory(); i < len; ++i) {
        tiff.setDirectory(i);
        var canvas = tiff.toCanvas();
        $('.prevpanel').append(canvas);
      }
    };
    xhr.send();
    fetchForm();
  });

 
  
  // EVENTLISTINER FOR KEY STROKE COMBINATION

  localStorage.setItem('zoomProperties',100); //DEFAULT ZOOM PERCENTAGE
  //CTRL + UP ZOOM IN
  document.addEventListener('keydown', function(event) {
      if (event.ctrlKey && event.keyCode == 38) {
          zoomProp = parseInt(localStorage.getItem('zoomProperties'));
          zoom = parseInt(zoomProp + 20);
          zoomPropSave = localStorage.setItem('zoomProperties',zoom)
          console.log(zoomProp + ' zoom in')
          $('canvas').css('zoom',zoomProp + '%');
          getScrollHW()
      }
  });
  // CTRL + DOWN ZOOM OUT
  document.addEventListener('keydown', function(event) {
      if (event.ctrlKey && event.keyCode == 40) {
          zoomProp = parseInt(localStorage.getItem('zoomProperties'));
          zoom = parseInt(zoomProp - 20);
          zoomPropSave = localStorage.setItem('zoomProperties',zoom)
          console.log(zoomProp + ' zoom out')
          $('canvas').css('zoom',zoomProp + '%');
          getScrollHW()
      }
  });

  
  // GLOBAL VARIABLE
  var scroll_height = 0;
  var scroll_width = 0;
  
  const getScrollHW =()=>{
      var panel_img = document.querySelector('.prevpanel');
      console.log(panel_img.scrollHeight)
      console.log(panel_img.scrollWidth)
      scroll_height = panel_img.scrollHeight;
      scroll_width = panel_img.scrollWidth;
  }



  // SCROLL DOWN
  document.addEventListener('keydown', function(event) {
      if(event.shiftKey && event.keyCode == 40){
          getScrollHW();
          console.log('scrolldown')
          var panel_img = document.querySelector('.prevpanel');
          var scroll_index = parseFloat(scroll_height * 0.20);
          panel_img.scrollBy(0,scroll_index);
      }
  });

  // SCROLL UP
  document.addEventListener('keydown', function(event) {
      if(event.shiftKey && event.keyCode == 38){
          getScrollHW();
          console.log('scrollup')
          var panel_img = document.querySelector('.prevpanel');
          var scroll_index = parseFloat(scroll_height * 0.20) * -1; // TRANSFORM TO NEGATIVE VALUE
          panel_img.scrollBy(0,scroll_index);
      }
  });

  // SCROLL RIGHT
      document.addEventListener('keydown', function(event) {
          if(event.shiftKey && event.keyCode == 39){
              getScrollHW();
              console.log('scroll right')
              var panel_img = document.querySelector('.prevpanel');
              var scroll_index = parseFloat(scroll_width * 0.20); 
              panel_img.scrollBy(scroll_index,0);
          }
      });
  
  // SCROLL LEFT
  document.addEventListener('keydown', function(event) {
          if(event.shiftKey && event.keyCode == 37){
              getScrollHW();
              console.log('scroll left')
              var panel_img = document.querySelector('.prevpanel');
              var scroll_index = parseFloat(scroll_width * 0.20) * -1; 
              panel_img.scrollBy(scroll_index,0);
          }
      });
  

const fetchForm =()=>{
    var projCode = $('#project_code').val();
    $.ajax({
        url:'processor.php',
        type:'POST',
        cache:false,
        data:{
            method:'fetch_form',
            project_code:projCode
        },success:function(response){
          //   console.log(response)
            $('#render_form').html(response);
            fetchImageFileName();
        }
    })
}
  

function fetchImageFileName(){
    $('#IMAGE_FILENAME').val(filename);
}
 
var keyed = [];

function saveData(){
    var cols = [];
    var data = [];
    var projectCode = $('#project_code').val();
    $('.fieldID').each(function(){
        cols.push($(this).html());
    });
    $('.keyedData').each(function(){
        data.push($(this).val());
    });
    // console.log(cols);
    // console.log(data);
    
    $.ajax({
        url: 'processor.php',
        type: 'POST',
        cache: false,
        data:{
            method: 'saveData',
            cols:cols,
            keydata:data,
            projectCode:projectCode
        },success:function(response){
            console.log(response);
        }
    })
}

function validate_numeric(evt) {
    var theEvent = evt || window.event;
  
    // Handle paste
    if (theEvent.type === 'paste') {
        key = event.clipboardData.getData('text/plain');
    } else {
    // Handle key press
        var key = theEvent.keyCode || theEvent.which;
        key = String.fromCharCode(key);
    }
    var regex = /[0-9]|\./;
    if( !regex.test(key) ) {
      theEvent.returnValue = false;
      if(theEvent.preventDefault) theEvent.preventDefault();
    }
  }

const validate_alpha =(evt)=>{
    var theEvent = evt || window.event;
  
    // Handle paste
    if (theEvent.type === 'paste') {
        key = event.clipboardData.getData('text/plain');
    } else {
    // Handle key press
        var key = theEvent.keyCode || theEvent.which;
        key = String.fromCharCode(key);
    }
    var regex = /^[A-Za-z-]+$/;
    // allow dash
    if( !regex.test(key) ) {
      theEvent.returnValue = false;
      if(theEvent.preventDefault) theEvent.preventDefault();
    }
}

const validate_alphanum =(evt)=>{
    var theEvent = evt || window.event;
  
    // Handle paste
    if (theEvent.type === 'paste') {
        key = event.clipboardData.getData('text/plain');
    } else {
    // Handle key press
        var key = theEvent.keyCode || theEvent.which;
        key = String.fromCharCode(key);
    }
    //the above regex allows spaces in side a string and restrict special characters.It Only allows a-z, A-Z, 0-9, Space, Underscore and dash.

    var regex = /^([a-zA-Z0-9 _-]+)$/;
    if( !regex.test(key) ) {
      theEvent.returnValue = false;
      if(theEvent.preventDefault) theEvent.preventDefault();
    }
}

const matrix =(table)=>{

    $.ajax({
        url:'datatable.php',
        type: 'POST',
        cache:false,
        data:{
            method:'fetch_matrix',
            table:table
        },success:function(response){
            console.log(response);
            
            $('datalist#matrix').append(response);
        }
    })
}
