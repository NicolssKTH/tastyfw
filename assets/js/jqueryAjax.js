$(document).ready(function(){
    var numRows = 0;
    showComments();
    longpolling();

    $('#showForm').click(function(){
        $('#myModal').modal('show');
        $('#myForm').attr('action', 'http://localhost/tastyfw/comments/addComment');

    })

    function longpolling() {
        $.ajax({
            type: 'POST',
            url: 'http://localhost/tastyfw/comments/longpolling',
            data:{ numRows: numRows},
            dataType: 'json',
            success:    function (response) {
                console.log(response);
                showComments();
                longpolling();
            }
        });
    }



    $('#addcomment').click(function(){
        var url = $('#myForm').attr('action');
        var data = $('#myForm').serialize();

        var comment = $('textarea[name=body]');
        var result = '';
        if(comment.val() == ''){
            comment.parent().parent().addClass('not-filled');
        }else{
            comment.parent().parent().removeClass('not-filled');
            result += '1';
        }
        if(result == '1'){
            $.ajax({
                type: 'ajax',
                method: 'post',
                url: url,
                data: data,
                async: false,
                dataType: 'json',
                success: function(response){
                    if(response.success){
                        $('#myModal').modal('hide');
                        $('#myForm')[0].reset();
                        $('.alert-success').html('Your comment has been posted!').fadeIn().delay(4000).fadeOut('slow');
                        showComments();
                    }else{
                        alert('Error');
                    }
                },
                error: function(){
                    alert('Could not comment');
                }
            });
        }
    })


    $('#commentsarea').on('click', '.deletebutton', function(){
        var id = $(this).attr('data');
        $.ajax({
            type: 'ajax',
            method: 'get',
            async: false,
            url: 'http://localhost/tastyfw/comments/delete',
            data:{id:id},
            dataType: 'json',
            success: function(response){
                if(response.success){
                    $('.alert-success').html('Comment Deleted successfully').fadeIn().delay(4000).fadeOut('slow');
                    showComments();
                }else{
                    alert('Error: You cant delete that comment.');
                }
            },
            error: function(){
                alert('Error deleting');
            }
        });
    });

    function showComments(){
        $.ajax({
            type: 'ajax',
            url: 'http://localhost/tastyfw/comments/showcomments',
            async: false,
            dataType: 'json',
            success: function(data){
                var output = '';
                var deleteComment = '';
                var i;
                numRows = data.length;
                for(i = 0; i<data.length;i++){
                    if($('#username').text() == data[i].username){
                        deleteComment = '<a href="javascript:;" class="deletebutton" data="'+data[i].id+'">Delete</a>'
                    }else{
                        deleteComment = '';
                    }
                    data[i].username;
                    if(data[i].food == $('#foodcomment').val()){
                        output += '<div class="comment">'+deleteComment+'<h3 class="commentusername">'+data[i].username+'</h3><p>'+data[i].comment+'</p></div>';
                    }
                }
                $('#commentsarea').html(output);
            },
            error: function(){
                alert('could not get data from database');
            }
        })
    }
})
