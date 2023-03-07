<html>  
    <head>  
        <title>ADMIN check</title>  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
    </head>  
    <body>  
        <div class="container">  
            <br />  
            <br />
			<br />
			<div class="table-responsive">  
				<h3 align="center">ADMIN CHECK - USER DATA</h3><br />
				<span id="result"></span>
				<div id="live_data"></div>                 
			</div>  
		</div>
    </body>  
</html>  
<script>  

//select
$(document).ready(function(){  
    function fetch_data()  
    {  
        $.ajax({  
            url:"select.php",  
            method:"POST",  
            success:function(data){  
				$('#live_data').html(data);  
            }  
        });  
    }  
    //fetching data
    fetch_data();  

    //insert
    $(document).on('click', '#btn_add', function(){  
        var name = $('#name').text();  
        var email = $('#email').text(); 
        var pass = $('#pass').text(); 
        if(name == '')  
        {  
            alert("Enter Name please");  
            return false;  
        }  
        if(email == '')  
        {  
            alert("Enter Mail please");  
            return false;  
        }  
        if(pass == '')  
        {  
            alert("Enter password please");  
            return false;  
        }
        //insert  
        $.ajax({  
            url:"insert.php",  
            method:"POST",  
            data:{name:name, email:email, pass:pass},  
            dataType:"text",  
            success:function(data)  
            {  
                alert(data);  
                fetch_data();  
            }  
        })  
    });  

    //edit
	function edit_data(id, text, column_name)  
    {  
        $.ajax({  
            url:"edit.php",  
            method:"POST",  
            data:{id:id, text:text, column_name:column_name},  
            dataType:"text",  
            success:function(data){  
                //alert(data);
				$('#result').html("<div class='alert alert-success'>"+data+"</div>");
            }  
        });  
    }  
    $(document).on('blur', '.name', function(){  
        var id = $(this).data("id1");  
        var name = $(this).text();  
        edit_data(id, name, "name");  
    });  
    $(document).on('blur', '.email', function(){  
        var id = $(this).data("id2");  
        var email = $(this).text();  
        edit_data(id,email, "email");  
    });  
    $(document).on('blur', '.pass', function(){  
        var id = $(this).data("id3");  
        var pass = $(this).text();  
        edit_data(id,pass, "pass");  
    });

    //delete  
    $(document).on('click', '.btn_delete', function(){  
        var id=$(this).data("id4");  
        if(confirm("Are you sure you want to delete this?"))  
        {  
            $.ajax({  
                url:"delete.php",  
                method:"POST",  
                data:{id:id},  
                dataType:"text",  
                success:function(data){  
                    alert(data);  
                    fetch_data();  
                }  
            });  
        }  
    });  
});  
</script>