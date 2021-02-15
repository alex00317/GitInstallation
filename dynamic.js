$(function() {

    $('.register').on('click', function() {
            alert('You have clicked on submit button');
            let name = $('.name').val();
            if (name != "") {
                    alert('Your name is ' + name);
            } else {
                    alert("Name must be required");
            }
    });

});