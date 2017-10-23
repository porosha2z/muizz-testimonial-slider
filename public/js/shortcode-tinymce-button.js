(function() {
    tinymce.create('tinymce.plugins.Absaccdion', {
        init : function(ed, url) {
        
            ed.addButton('wprong_tmslider', {
                title : 'WPRONG Testimonial Slider Shortcode',
                cmd : 'wprong_tmslider',
                image : url + '/mce_button.png'
            });
 
             
            ed.addCommand('wprong_tmslider', function() {
               
                        shortcode = '[wprong_testimonial]' ;
                        ed.execCommand('mceInsertContent', 0, shortcode);
                 
                    
            });
        },
        // ... Hidden code
    });
    // Register plugin
    tinymce.PluginManager.add( 'wprong_tmslider', tinymce.plugins.Absaccdion );
})();