$('#compose-modal').on('shown.bs.modal', function () {
    $('#compose-modal').trigger('focus')
});

$('#delete-all-modal').on('shown.bs.modal', function () {
    $('#delete-all-modal').trigger('focus')
});

$('#refresh').on('click', function () {
    let xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            document.querySelector('.messages').innerHTML = this.responseText;
        }
    }
    xhttp.open('GET', 'scripts/ajax-messages.php', false);
    xhttp.send();
    toggleDeleteButton();
    messageOpenFunctionality();
    $(this).text("Refresh");
});

$('#close-notification').on('click', function(){
    $(this).parent().remove();
});

//Disabling 'Delete All' button if no messages.
function toggleDeleteButton(){
    let messageAvail = document.querySelector('.message');
    if(!messageAvail){
        document.getElementById('delete-all').disabled = true;
    } else {
        document.getElementById('delete-all').disabled = false;
    }
};


//Open messages on clicking
function messageOpenFunctionality(){
    let messages = document.querySelectorAll('.message');
    messages.forEach(function(message){
    message.addEventListener('click', function(e){
        let id = e.target.getAttribute('data-id');
        let xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                let messageData = JSON.parse(this.responseText);
                let fullMessage = '<div class="message-full" data-id="' + messageData.id + '">';
                    fullMessage += '<div class="message-full-sender">';
                    fullMessage += '<h5>'+ messageData.sender +'</h5>';
                    fullMessage += '</div>';
                    fullMessage += '<div class="message-full-body">';
                    fullMessage += '<p>'+ messageData.body +'</p>';
                    fullMessage += '</div>';
                    fullMessage += '<div class="message-full-dated">';
                    fullMessage += '<small>'+ messageData.dated +'</small>';
                    fullMessage += '</div>';
                    fullMessage += '<div class="message-full-options">';
                    fullMessage += '<button class="btn btn-theme" id="reply">Reply</button>&nbsp;';
                    fullMessage += '<button class="btn btn-danger" id="delete-message" data-id="' + messageData.id + '">Delete</button>';
                    fullMessage += '</div>';
                    fullMessage += '</div>';
                document.querySelector('.messages').innerHTML = fullMessage;
            }
        }
        xhttp.open('GET', 'scripts/get-message.php/?id=' + id, false);
        xhttp.send();
        $("#refresh").text('Back');
        $('#reply').on('click', function(){
            $("#to").val($(this).parent().parent().children(":first").text());
            $('#compose').click();
            $("#message-body").focus();
        });
        $('#delete-message').on('click', function(){
            let id = e.target.getAttribute('data-id');
            let xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function(){
                if(this.readyState === 4 && this.status == 200){
                    $('#refresh').click();
                }
            };
            xhttp.open('POST', 'scripts/delete-message.php', false);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send("id=" + id); 
        });
    });   
    });   
};

//Calling Methods
toggleDeleteButton();
messageOpenFunctionality();