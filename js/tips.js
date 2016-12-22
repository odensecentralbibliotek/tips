/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$( document ).ready(function() {
    var already_participated =  $.cookie('participated');
    if(already_participated == 'true')
    {
        $('table').toggle();
        $('#SubmitForm').toggle();
        $('.thank_you_overlay').toggle();
    }
    $('.click-enabled').click(function(e){
        var Target = $(e.currentTarget);
        Target.parent().parent().find('.img-x').remove();
        
        var imgElem = $('<img />');
        imgElem.toggleClass('img-x');
        imgElem.attr('src','http://tip13.fynbib.dk/img/Black_x.svg');
        imgElem.css('width','20px');
        imgElem.css('height','20px');
        Target.append(imgElem);
        
    }); 
    $('form').submit(function(e){
        var PdfData = $('html').clone();
        $(PdfData).find('#SubmitForm').remove();
        $(PdfData).find('head').append('<link id="" rel="stylesheet" type="text/css" href="http://tip13.fynbib.dk/css/wkhtmltopdf.css">');
        $(PdfData).find('script').remove();
        var name = $('#navn').val(); 
        var email = $('#email').val(); 
        $(PdfData).find('.pdf_print_name').text(name);
        $(PdfData).find('.pdf_print_email').empty().append($('<a>'+email+'</a>').attr('href',"mailto:"+email));
        
        var tmp = PdfData.html();
        $('#pdfdata').val(JSON.stringify(tmp));
        $.cookie('participated', 'true',{ expires: 365, path: '/' });
    });
    $('.restart_koupon').click(function(e){
        $.cookie('participated', 'false',{ expires: 365, path: '/' })
        window.location = window.location.href;
    })
});

