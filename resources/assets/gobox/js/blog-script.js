
/**
 *
 * Blog script page
 * use this script on development purpose
 *
 * Author : Hendra
 *
 */


/* global variable App, promo, loader */
var promo = true;


/**
 *
 * Handlebars Function
 *
 */

Handlebars.registerHelper('sliceString', function (words) {
    this.count = 80;
    this.trimmedString = words.substr(0, this.count);

    //re-trim if we are in the middle of a word
    return this.trimmedString.substr(0, Math.min(this.trimmedString.length, this.trimmedString.lastIndexOf(" "))) + ' ...';
});

Handlebars.registerHelper('dateFormated', function (date, type) {
    if (type == 'text')
        return moment(date, "YYYY-MM-DD HH:mm:ss").fromNow();
    else
        return moment(date, "YYYY-MM-DD HH:mm:ss").format('do MMM YYYY');
});

Handlebars.registerHelper('if_eq', function(a, b, opts) {
    if(a == b) 
        return opts.fn(this);
    else
        return opts.inverse(this);
});

Handlebars.registerHelper('promo', function(opts) {
    if(promo) {
        promo = false;
        return opts.fn(this);
    } else {
        promo = true;
        return opts.inverse(this);
    }
});

/**
 *
 * App Function (Main function)
 *
 */


var App = {

    /**
     *
     * Init Function
     * Use to initialize function
     *
     * @param {[type]} [varname] [description]
     *
     */
    

    init: function() {
        this.nextPage          = App.getPage();
        this.prevPage          = null;
        this.promo             = true;
        this.blogCont          = $('#blog-container');
        this.indiCont          = $('#indicator-container');
        this.type              = null;
        this.waitLoad          = false;
        loader                 = $('#loader-blog');
        this.indicatorTemplate = Handlebars.compile($('#indicator-template').html());
        this.blogTemplate      = Handlebars.compile($('#blog-template').html());

        this.binds();
        this.getHighlight();
        this.getPage();
        this.getContent();
    },

    binds: function() {
        $(document)
            .scroll(function() {
                this.contentHeight = $(document).height();
                this.yOffset       = window.pageYOffset;
                this.y             = this.yOffset +  window.innerHeight;

                if (this.y >= this.contentHeight) {
                    App.getContent();
                };
            });
    },

    /**
     *
     * getHightlight function
     * this used to call the highlight content and display the carousel
     *
     * @param {object} [data] [set of object from ajax]
     *
     */
    
    getHighlight: function() {
        function renderTemplate(data) {
            App.indiCont.html(App.indicatorTemplate(data.data));
            $(".main-headline")
                .owlCarousel({
                  items: 1,
                  loop: true,
                  nav: true,
                  autoHeight: true,
                  dotsContainer: '.post-indicator'
                });
        }

        $.get('/api/blogs/highlights', function(data) {
            renderTemplate(data);
        });
    },

    /**
     *
     * getPage function
     * initialize url to get the blog data
     *
     * @return {string} [set of url string]
     *
     */
    
    getPage: function() {
        return blogCategory ? '/api/blogs/' + blogCategory : '/api/blogs?limit=6&promos=true';
    },

    /**
     *
     * getContent function
     * call the blog data
     *
     * @param {[type]} [varname] [description]
     *
     */
    
    getContent: function() {
        if(this.nextPage && this.waitLoad == false) {
            this.waitLoad = true;
            loader.css('display', 'table');

            $.get(App.nextPage, function(data) {
                App.prevPage = data.prev_page_url;
                blogCategory ? 
                    App.nextPage = data.pagination.links.next :
                    App.nextPage = data.pagination.links.next + '&promos=true';
                data.pagination.links.next ?
                    App.nextPage = App.nextPage : App.nextPage = null;
                App.waitLoad = false;
                loader.hide();
                App.blogCont.append(App.blogTemplate(data.data));
            });
        }
    }
};

$(document).ready(function() {
    App.init();
});