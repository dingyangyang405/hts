$(document).ready(function(){   
    $(".js-add-btn").on('click',function(){
        var url = $(this).data('url');
        $.get(url,function(res){
            $("#modal").html(res).modal();
        })
    });

    $('body').on('click', '#add', function(){
        var $form = $('#createCategoryForm');
        $.post($form.attr('action'), $form.serialize(), function(data){
            $('#modal').html(data).modal('hide');
            $('.list').prepend($(data));
        });
    });

    $(".js-table").on('click',function(event){
        if($(event.target).hasClass('js-update-btn')){
            var url = $(event.target).data('url');
            $.get(url,function(res){
            $("#modal").html(res).modal();
            })    
        } else if ($(event.target).hasClass('js-delete-btn')){
            var status = confirm("确认删除吗？");
            if(!status){
                return false;
            }
            var del_url = $(event.target).data('url');
            var id = $(event.target).data('id');
            $.ajax({
                type : 'GET',
                url : del_url,
                dataType: "json",
                success: function (data) { 
                    $('#'+id).remove();
                },
                error: function() {
                    alert('存在相关联的FAQ或工单，删除失败!');
                }
            })
        }
    });

    $('body').on('click', '#update', function(){
        var $form = $('#updateCategoryForm');
        var id = $(this).attr('data-id');
        $.post($form.attr('action'), $form.serialize(), function(data){
            $('#modal').html(data).modal('hide');
            $('#'+id).html(data);
        });
    });
});