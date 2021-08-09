function navclicked() {
    var $sender = $(window.event.target);

    var li = $sender;
    var ul = li.find(">ul");

    var url = root + 'Blog/Nav/' + li.find(">span.pointer").html().trim();

    if (!li.hasClass("loaded"))
        $.getJSON(url, function(data) {
            $.each(data, function(i, item) {
                if (item.type == 'category') {
                    ul.append('<li class="parent" onclick="navclicked">' + item.title + '<ul>' +
                        '</ul><span class="pointer" style="display: none;">' + item.pointer + '</span></li>');
                } else if (item.type == 'post') {
                    ul.append('<li><a href="' + root + 'Blog/Post/' + item.pointer + '">' + item.title + '</a></li>');
                }
            });
            li.addClass("loaded");
        });


    ul.toggle("slow");

    if (li.hasClass("close"))
        li.removeClass("close");
    else {
        li.addClass("close");
    }
}