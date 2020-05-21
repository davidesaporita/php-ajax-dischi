$(document).ready( () => {
    
    // Refs
    var albumList = $('.album-list');

    // Init Handlebars 
    var source = $('#template').html();    
    var template = Handlebars.compile(source);

    $.ajax({
        url: 'partials/data/json-encoded.php',
        method: 'GET',
        success: function(data) {
            console.log(data);
            
            data.forEach((element) => {
                var templateData = {
                    title:  element.title,
                    author: element.author,
                    year:   element.year,
                    cover:  element.cover,
                }

                var html = template(templateData);
                albumList.append(html);
                
            });
        },
        error: function() {
            console.log('Something goes wrong');    
        }
    });
});