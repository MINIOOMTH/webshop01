$(document).ready(function() {
    $("#Check_Ajax").submit(function(e) {
        e.preventDefault();

        let formUrl = $(this).attr("action");
        let reqMethod = $(this).attr("method");
        let formData = $(this).serialize();

        $.ajax({
            url: formUrl,
            type: reqMethod,
            data: formData,
            dataType: "html",
            success: function(data) {
                let result = JSON.parse(data);
                if (result.status === "success") {
                    Swal.fire("สำเร็จ!", result.msg, result.status).then(function() {
                        window.location.reload();
                    });
                } else {
                    Swal.fire("ล้มเหลว!", result.msg, result.status);
                }
            }
        })
    })
})

$(document).ready(function(){  
  $("#ssss").click(function(e){  
    e.preventDefault();  
  });  
});  