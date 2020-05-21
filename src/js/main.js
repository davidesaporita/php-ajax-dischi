$(document).ready( () => {
    
    // Refs
    var albumList = $('.album-list');

    // Init Handlebars 
    var source = $('#template').html();    
    var template = Handlebars.compile(source);

    // Data
    var jsonUrl = 'partials/data/json-encoded.php';
    var settings = {
        url: jsonUrl,
        method: 'GET',
        error: () => console.log('Something goes wrong')
    };

    // Ajax Call to populate result list
    $.ajax(settings)
        .done(data => {
            data.forEach((element) => {
                print(element);
            });
        }); 

    // Event on keyup (input search)
    $('#search').keyup( function() {
        var self = $(this).val().trim().toLowerCase();
        
        // Clear result list
        albumList.html('');

        // Search
        $.ajax(settings)
            .done(data => {
                data.forEach((element) => {
                    var checkingTitle  = element.title.toLowerCase();
                    var checkingAuthor = element.author.toLowerCase();
                    var checkingYear   = element.year.toLowerCase();
                    if(checkingTitle.includes(self) || checkingAuthor.includes(self) || checkingYear.includes(self)) {
                        print(element);
                    }
                });
            }); // End of ajax.done()
    }); // End of Keyup Event

    // Print via Handlebars template
    function print(element) {        
        var templateData = {
            title:  element.title,
            author: element.author,
            year:   element.year,
            cover:  element.cover,
            class:  "album-list__item--show"
        }

        var html = template(templateData);
        albumList.append(html); 
    }

});