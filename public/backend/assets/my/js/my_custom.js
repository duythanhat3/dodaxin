/**
 * Created by manhdung on 6/4/16.
 */
function load_ajax_url(ajax_url, container_id, success_callback) {

    $.ajax({
        type: "GET",
        url:  ajax_url,
        success: function(html){
            if (container_id != null && container_id != "") {
                $("#"+container_id).html(html);
            }
            if (success_callback != null) {
                success_callback();
            }
        }
    });
}

function load_ajax_url_by_post(ajax_url, data_arr, container_id, success_callback) {

    $.ajax({
        type: "POST",
        url:  ajax_url,
        data: data_arr,
        success: function(html){
            if (container_id != null && container_id != "") {
                $("#"+container_id).html(html);
            }
            if (success_callback != null) {
                success_callback();
            }
        }
    });
}

function alert_notice(n_title, n_text){

    $.gritter.add({
        title: n_title,
        text: n_text,
        //image: 'assets/img/user-2.jpg',
        //sticky: true,
        time: 2000,
        //class_name: 'my-sticky-class'
    });
}