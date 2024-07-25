$(".signup-image-link").on("click", function(){
    $("#registerModal").css("display", "none")
    $(".modal-backdrop").css("display", "none")
});

$("#login-form").submit((function(e){
    e.preventDefault()
    const form = $(this);
    const email = form.find("#email").val()
    const password = encryptPassword(form.find("#password").val())
    const route = form.attr("action")
    $.post({
        url: route,
        data: {
            email,
            password,
            _token: $("meta[name=csrf-token]").attr("content")
        },
        success: function (res){
            location.reload()
        },
        error:function (err){
            showErrors(err)
        }
    });
}));

$("#register-form").submit(function (e){
    e.preventDefault()
    const form = $(this);
    const name = form.find("#name").val();
    const email = form.find("#email").val();
    const password = encryptPassword(form.find("#password").val());
    const password_confirmation = encryptPassword(form.find("#password_confirmation").val());
    const route = form.attr("action");
    console.log(name, email, password, password_confirmation, route)
    $.post({
        url: route,
        data: {
            name,
            email,
            password,
            password_confirmation,
            _token: $("meta[name=csrf-token]").attr("content")
        },
        success: function (res){
            toastr.success("Successful registered. Check inbox.")
        },
        error: function (err){
            showErrors(err)
        }
    });
})

function encryptPassword(password) {
    // This is a simple example, you should use a secure key and IV
    var key = CryptoJS.enc.Utf8.parse('1234567890123456'); // 16-byte key
    var iv = CryptoJS.enc.Utf8.parse('1234567890123456'); // 16-byte IV

    var encrypted = CryptoJS.AES.encrypt(password, key, {
        iv: iv,
        mode: CryptoJS.mode.CBC,
        padding: CryptoJS.pad.Pkcs7
    });

    return encrypted.toString();
}

function showErrors(err){
    console.log(err.responseJSON.errors)
    toastr.error(err.responseJSON.message);
}
