<script>

    function editForm(r) {
        document.getElementById("editform").style.display = "block";
        document.getElementById("createform").style.display = "none";
        x=document.getElementById("example").rows[r].cells.namedItem("cid").innerHTML;
        y=document.getElementById("example").rows[r].cells.namedItem("cname").innerHTML;
        document.getElementById("id").value=x;
        document.getElementById("name").value=y;
    } 
    function hideEditForm(){
        document.getElementById("editform").style.display = "none";
        document.getElementById("createform").style.display = "block";
    }           

  function get_center(gov){
    var gov_id=gov.value;
    var Url="{{ url('ajax/getCenter')}}";
 //    $.ajaxsetup({headers:{'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')}});
    $.ajax({
         url:Url,
         type: 'GET',
         data:{gov_id:gov_id},
         datatype: 'json',
         success: function (data){
            $("#center").html(data);
            $("#village").html("");
            $("#school").html("");
         }
     }); 
     };

     function get_village(ctr){
    var ctr_id=ctr.value;
    var Url="{{ url('ajax/getVillage')}}";
    $.ajax({
         url:Url,
         type: 'GET',
         data:{ctr_id:ctr_id},
         datatype: 'json',
         success: function (data){
             $("#village").html(data);
             $("#school").html("");
         }
     }); 
     };

     function get_school(vill){
    var vill_id=vill.value;
    var Url="{{ url('ajax/getSchool')}}";
    $.ajax({
         url:Url,
         type: 'GET',
         data:{vill_id:vill_id},
         datatype: 'json',
         success: function (data){
             $("#school").html(data);
         }
     }); 
     };

     function get_mainData(sc){
    var sc_id=sc.value;
    var Url="{{ url('ajax/getMainData')}}";

    $.ajax({
         url:Url,
         type: 'GET',
         data:{sc_id:sc_id},
         datatype: 'json',
         success: function (data){
            data=JSON.parse(data);
            $("#lapbody").html(data['table']);
            $('#id_no').val( data['school']['id_no']);
            $('#stage').val( data['stage']);
            $("#devices").html("");

         }
     }); 
     };


     function get_devices(lapid){
    var Url="{{ url('ajax//getdevices')}}";
    $.ajax({
         url:Url,
         type: 'GET',
         data:{lapid:lapid},
         datatype: 'json',
         success: function (data){
             $("#devices").html("");
             $("#devices").html(data);
         }
        });

    };       


     function get_Element(machine){
    var mach_id=machine.value;
    var Url="{{ url('ajax_getElement')}}";
    $.ajax({
         url:Url,
         type: 'GET',
         data:{mach_id:mach_id},
         datatype: 'json',
         success: function (data){
             $("#element").html(data);
         }
     }); 
     };

function repairShow(devno){
    var devno=devno;
    var Url="{{ url('ajax/repairshow')}}";
    $.ajax({
        url:Url,
        type: 'GET',
        data:{devno:devno},
        datatype: 'json',
        success: function (data){
            $("#repairshow").html("");
            $("#repairshow").html(data);
            // document.getElementById('elem1').value="";
            // document.getElementById('emp1').value="";
            // document.getElementById('notes1').value="";
            // #modal
            var modal = document.getElementById('myModal_repair');
            modal.style.display = "block";
            var span = document.getElementById("close_repair");
            span.onclick = function() {
                modal.style.display = "none";
            }
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        }
     }); 

}

function repair_update(devno,idle_id){
    // var devno=devno;
    // var idle_id=idle_id;
    var spare1=document.getElementById('spare_'+idle_id).value;
    if(document.getElementById('date_'+idle_id)){
        var date1=document.getElementById('date_'+idle_id).value;
    }else{
        var data1="";
    }
    if(document.getElementById('emp_'+idle_id)){
        var emp1=document.getElementById('emp_'+idle_id).value;
    }else{
        var emp1="";
    }
    var notes1=document.getElementById('notes_'+idle_id).value;
    var Url="{{ url('ajax/repair_update')}}";
    $.ajax({
         url:Url,
         type: 'GET',
         data:{idle_id:idle_id,date1:date1,spare1:spare1,emp1:emp1,notes1:notes1},
         datatype: 'json',
         success: function (data){
            if(data.success) {
                document.getElementById("devtr_"+devno).style.backgroundColor = "#ecf3ff";
                document.getElementById("repair_"+devno).style.visibility="hidden";
                document.getElementById("close_repair").click();
            } else {
                document.getElementById("repair_"+devno).click();
            }
         }
     }); 
     };
  


function idlesShow(devno){
    var devno=devno;
    var Url="{{ url('ajax/idleshow')}}";
    $.ajax({
        url:Url,
        type: 'GET',
        data:{devno:devno},
        datatype: 'json',
        success: function (data){
            $("#idleshow").html("");
            $("#idleshow").html(data);
            if(data.clearstatus){
              document.getElementById('elem1').value="";
              document.getElementById('emp1').value="";
              document.getElementById('notes1').value="";
            }
            // #modal
            var modal = document.getElementById('myModal_idle');
            modal.style.display = "block";
            var span = document.getElementById("close_idle");
            span.onclick = function() {
                modal.style.display = "none";
            }
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        }
     }); 

}

     function idle_add(devno){
    var devno=devno;
    var elem1=document.getElementById('elem1').value;
    if(document.getElementById('date1')){
        var date1=document.getElementById('date1').value;
    }else{
        var data1="";
    }
    if(document.getElementById('emp1')){
        var emp1=document.getElementById('emp1').value;
    }else{
        var emp1="";
    }
    var notes1=document.getElementById('notes1').value;
    var Url="{{ url('ajax/idleadd')}}";
    $.ajax({
         url:Url,
         type: 'GET',
         data:{devno:devno,elem1:elem1,date1:date1,emp1:emp1,notes1:notes1},
         datatype: 'json',
         success: function (data){
          if(data.success) {
            document.getElementById("add_"+devno).click();
            document.getElementById("devtr_"+devno).style.backgroundColor = "#f0ad4e";;
            document.getElementById("repair_"+devno).style.visibility="visible";
                 }
         }
     }); 
     };
  



    function showVillageTable(center){
    var cnt_id=center.value;
    var Url="{{ url('ajax/showVillageTable')}}";
    $.ajax({
         url:Url,
         type: 'GET',
         data:{cnt_id:cnt_id},
         datatype: 'json',
         success: function (data){
            //  alert(data);
             $("#databody").html("");
             $("#databody").html(data);
         }
     }); 
     };  

     function showInputBox(sbox){
         if(sbox.value==0)
            document.getElementById("name").style.display = "block";
         else   
         document.getElementById("name").style.display = "none";
         document.getElementById("name").value =$("#element option:selected").text();
     }


    $(document).ready(function(){
      $("#master tbody tr").click(function(){
        $("#master tbody tr").css("background-color", "transparent");
        $("#master tbody tr").css("color", "#878686");
        $(this).css("background-color", "#c4c3c3");
      });
    });


  $(document).ready(function(){
    $("#master tbody tr").click(function(){
    var lapid=$(this).attr('id');
    var Url="{{ url('ajax_getdevices')}}";
    $.ajax({
         url:Url,
         type: 'GET',
         data:{lapid:lapid},
         datatype: 'json',
         success: function (data){
            //  alert(data);
             $("#devices").html("");
             $("#devices").html(data);
         }
        });
    });
});


    function viewTable(machine){
    var machid=machine.value;
    var Url="{{ url('ajax/showVillageTable')}}";
    $.ajax({
         url:Url,
         type: 'GET',
         data:{machid:machid},
         datatype: 'json',
         success: function (data){
            //   alert(data);
             $("#devt_tbody").html("");
             $("#devt_tbody").html(data);
         }
     }); 
     };


function ssss(trid){
    alert(trid);
    document.getElementById("devices_type_id").value =trid;
};


function showidles(id){

    if (id.style.display === "none") {
    id.style.display = "block";
  } else {
    id.style.display = "none";
  }
};


//      $(document).ready(function(){
//     $("#devt_tbody tr").click(function(){
//       $("#devt_tbody tr").css("background-color", "transparent");
//       $("#devt_tbody tr").css("color", "#878686");
//       $(this).css("background-color", "#c4c3c3");
//     });
//   });


</script>