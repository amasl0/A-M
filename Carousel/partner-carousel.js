    var window_width = document.documentElement.clientWidth;
    if(window_width>1100){
        var visible=5;
        // var item_width=18;
        // var item_margin=1;
    }
    else{if(window_width>760){
        var visible=4;
        // var item_width=23;
        // var item_margin=1;
    }else{
        if(window_width>350){
            var visible=3;
            // var item_width=30;
            // var item_margin=1.5;
        }else{
            var visible=1;
            // var item_width=90;
            // var item_margin=5;
        }
    }
        }


    var left_item=(row_num-5-(row_num-5)%2)/2+5;
    left_item=left_item-row_num;
    var right_item=(row_num-5-(row_num-5)%2)/2+5;
    
    for(var i=left_item;i<right_item;i++){ document.getElementById('position'+i).style.width=item_width+'%';
        document.getElementById('position'+i).style.margin='0 '+item_margin+'%';
        document.getElementById('position'+i).style.left=(i*(item_margin+item_margin+item_width))+'%';
        
    }
    
    
    window.onresize = function resized( event ) {
    var window_width = document.documentElement.clientWidth;
        if(window_width>1100){
        visible=5;
        item_width=18;
        item_margin=1;
    }
    else{if(window_width>760){
        visible=4;
        item_width=23;
        item_margin=1;
    }else{
        if(window_width>350){
            visible=3;
            item_width=30;
            item_margin=1.5;
        }else{
            visible=1;
            item_width=90;
            item_margin=5;
        }
    }
        }
    for(var i=left_item;i<right_item;i++){
        document.getElementById('position'+i).style.width=item_width+'%';
        document.getElementById('position'+i).style.margin='0 '+item_margin+'%';
        document.getElementById('position'+i).style.left=(i*(item_margin+item_margin+item_width))+'%';
        
    }
    };
    
  function move_right(){
        for(var i=right_item-2;i>=left_item;i--){
            var ii=i+1;
        document.getElementById('position'+i).id='position'+ii;} 
        document.getElementById('position'+(right_item-1)).id='position'+left_item;  
      
        document.getElementById('position'+(left_item)).style.display='none';
        document.getElementById('position-1').style.display='block';
        for(var i=left_item;i<right_item;i++){
        document.getElementById('position'+i).style.width=item_width+'%';
        document.getElementById('position'+i).style.margin='0 '+item_margin+'%';
        document.getElementById('position'+i).style.left=(i*(item_margin+item_margin+item_width))+'%';}
    }
    
    function move_left(){
        for(var i=left_item+1;i<right_item;i++){
            var ii=i-1;
        document.getElementById('position'+i).id='position'+ii;} 
        document.getElementById('position'+(left_item)).id='position'+(right_item-1);  
      
        document.getElementById('position'+(right_item-1)).style.display='none';
        document.getElementById('position6').style.display='block';
        for(var i=left_item;i<right_item;i++){
        document.getElementById('position'+i).style.width=item_width+'%';
        document.getElementById('position'+i).style.margin='0 '+item_margin+'%';
        document.getElementById('position'+i).style.left=(i*(item_margin+item_margin+item_width))+'%';}
    }
    setInterval(move_left, 5000);