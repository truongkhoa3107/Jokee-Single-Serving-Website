$(document).ready(function () { 
    updateButtonsVisibility($('#id').val());

    $(document).on("click", ".btn-like", function () {
        event.preventDefault();

        var _id = parseInt($('#id').val());
        var hasVoted = getCookie('jokeVoted_' + _id );
        console.log(hasVoted);
        if (!hasVoted) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'POST',
                url: '/joke',
                data:{id: _id, type: "like"},
                dataType: 'json',
                success: function (data) {
                    console.log(data);
                    $('#id').val(data.index);
                    $('#jokeContainer').html(
                        `<input type="hidden" name="id" value="` + data.index + `" id="id">` +
                        `<p>` + data.joke.content + `</p><br />`
                    );
                    updateButtonsVisibility(data.index);
                }
            });
        } else {
            alert('You have already voted for this joke.');
        }
    });
    
    $(document).on("click", ".btn-dislike", function () {
        event.preventDefault();

        var _id = parseInt($('#id').val());
        var hasVoted = getCookie('jokeVoted_' + _id);
        if (!hasVoted) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'POST',
                url: '/joke',
                data: { id: _id, type: "dislike" },
                dataType: 'json',
                success: function (data) {
                    console.log(data);
                    $('#id').val(data.index);
                    $('#jokeContainer').html(
                        `<input type="hidden" name="id" value="` + data.index + `" id="id">` +
                        `<p>` + data.joke.content + `</p><br />`
                    );
                    updateButtonsVisibility(data.index);
                }
            });
        } else {
            alert('You have already voted for this joke.');
        }
    });

    function updateButtonsVisibility(index) {
        if (index >= 4) {
            $('.btn-like').hide();
            $('.btn-dislike').hide();
        } else {
            $('.btn-like').show();
            $('.btn-dislike').show();
        }
    }

    function getCookie(cname) {
        console.log(document.cookie);
        let name = cname + "=";
        let decodedCookie = decodeURIComponent(document.cookie);
        let ca = decodedCookie.split(';');
        for(let i = 0; i <ca.length; i++) {
          let c = ca[i];
          while (c.charAt(0) == ' ') {
            c = c.substring(1);
          }
          if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
          }
        }
        return "";
      }
});