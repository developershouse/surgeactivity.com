<?php

/* @ZesharCRMCore/CRUD/DisplayPartial/lead_opportunity_show_block_actions_js.html.twig.orig */
class __TwigTemplate_4bc1180da826a03d7707ea257f375458ceca27920b6b3c35c728dcd96deea9b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<script type=text/javascript>
    (function(\$) {

        var _init = function() {
            \$popupWrapper = \$(\".popup-window\");
            \$popupWrapper.dialog({
                modal: true,
                resizable: false,
                autoOpen: false,
                buttons: {
                    \"Yes\": function() {
                        \$(this).dialog(\"close\");
                    },
                    \"Cancel\": function() {
                        \$(this).dialog(\"close\");
                    }
                }
            });

            \$(\".datepicker\").each(function() {

                var parsedDate = \$.datepicker.parseDate('M d, Y', \$(this).val());

                \$(this).text(\$.datepicker.formatDate('M d, Y', parsedDate));
            });


            \$(\"body\").on(\"click\", \".datepicker\", function(){
                if (!\$(this).hasClass(\"hasDatepicker\"))
                {
                    \$(this).datepicker();
                    \$(this).datepicker(\"show\");
                }
            });
            \$('.display-block-persistent').each(function() {

                var block = this;

                \$(this).on('click', '.btn-cancel-block', function(e) {
                    \$('form')[0].reset();
                    return false;
                });

                \$(this).on('click', '.btn-save-block', function(e) {

                    var controller = \$(block).data('controller');
                    if (!controller) {
                        console.log('no controller defined');
                        return;
                    }
                    var action = \$(block).data('action');
                    if (!action) {
                        console.log('no action defined');
                        return;
                    }

                    //var operation = \$(this).data(''); // in the future

                    var values = {};

                    \$(block).find('input, select, textarea, button').each(function() {
                        var key = \$(this).attr('name');
                        if (!key) {
                            key = \$(this).attr('id');
                        }
                        if(!key){
                            return;
                        }
                        if (this.getAttribute('type') == 'radio' ) {
                            if(this.hasAttribute('checked')) {
                                values[key] = \$(this).val();
                            }
                        } else if(key.indexOf('[]') !== false && this.getAttribute('type') == 'checkbox'){

                            if(!values[key]){
                                values[key] = [];
                            }

                            if(\$(this).prop('checked')) {

                                values[key].push(\$(this).val());
                            }
                        } else {
                            if (\$(this).hasClass('btn-green-border')) {
                                if(\$(this).hasClass('checkButton')) {
                                    values[key] = \$(this).val();
                                }
                            } else {
                                values[key] = \$(this).val();
                            }
                        }
                    });

                    // allow validation
                    var params = {values: values, isValid: true};
                    \$(this).trigger('block-data-validate', [params]);
                    if (!params.isValid) {
                        console.log('validation error');
                        return;
                    }

                    var ajaxUrl = \"";
        // line 102
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "getBaseURL", array(), "method"), "html", null, true);
        echo "/ajax/\" + controller + \"/\" + action;

                    console.log('sending ajax to ' + ajaxUrl);
                    console.log(values);

                    \$.ajax(ajaxUrl, {
                        'data': values,
                        'type': 'POST',
                        'success': function(response) {
                            console.log('ajax success');
                            \$(block).trigger('block-ajax-return', [response]);
                        },
                        'error': function() {
                            console.log('ajax error');
                            alert('A error occured while AJAX request.');
                        }
                    });

                    e.preventDefault();

                });
            });

            \$('.form-group').each(function() {

                var radioButton = \$(this).find('.radio');
                var buttonAction = \$(this).find('.btn-green-border');


                radioButton.on('click', function(e) {
                    radioButton.removeAttr('checked');
                    this.checked = true;
                    this.setAttribute('checked', 'checked')
                });

                buttonAction.on('click', function(e) {
                    var currentButton = \$(this).hasClass('checkButton');
                    buttonAction.removeClass('checkButton');
                    if (!currentButton){
                        \$(this).addClass('checkButton');
                    } else {
                        \$(this).removeClass('checkButton');
                    }

                });

            });

            \$('.custom-form-content').each(function(){
                var groups = \$(this).find('.group-forms');
                \$count = 0;
                \$(groups).each(function(){
                    \$(this).each(function(){
                        \$(\$(this).find('[name]')).each(function(){
                            var name = \$(this).attr('name').toString().replace(/\\\$\\\$name\\\$\\\$/g, \$count);
                            \$(this).attr('name', name);
                        });
                    });
                    \$count++;
                });
            });

            \$('.group-forms').each(function(){
                var currentWrapper = \$(this);
                var parentWrapper = \$(this).parents('.custom-form-content');
                var addButton = \$(this).find('.add-new');
                var clearAll = \$(this).find('.clear-all');

                var elementsCount = parentWrapper.find(\$('.group-forms')).length;

                addButton.on('click', function(){
                    var newWidget = parentWrapper.data(\"prototype\");
                    newWidget = newWidget.replace(/\\\$\\\$name\\\$\\\$/g, elementsCount);
                    parentWrapper.append(newWidget);
                    elementsCount++;
                });

                clearAll.on('click', function(){
                    currentWrapper.find('input:not(.autoId, .driverId, .insuredAddressId)').each(function () {

                        \$(this).val('');
                    });
                    currentWrapper.find('select').each(function () {
                        \$(this).val(\$(\"select option:first\").val());
                    });
                    return false;
                });


            });

            \$('article').each(function(){
                var wrapper = \$(this);
                var commentTextWrapper = \$('.comment-text');
                var currentCommentTextWrapper = \$(this).find('.comment-text');
                var ajaxUrl = \"";
        // line 197
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "getBaseURL", array(), "method"), "html", null, true);
        echo "/ajax/leads_display/leadNote\";


                \$(this).on('click', '.comment-delete', function(){
                    var value = {};
                    value['noteId'] = wrapper.find('.noteId').val();
                    value['lead_id'] = wrapper.find('.lead_id').val();

                    \$.ajax(ajaxUrl, {
                        'data': value,
                        'type': 'POST',
                        'success': function(response) {
                            console.log('ajax success');
                            wrapper.remove();
                        },
                        'error': function() {
                            console.log('ajax error');
                            alert('A error occured while AJAX request.');
                        }
                    });
                    return false;
                });

                \$(this).on('click', '.comment-edit', function(){
                    \$('.uploaded-file-block').remove();
                    \$('.attach-file').show();
                    \$(\"#note\").val('');
                    \$('.hide-notes-info').remove();
                    var textarea = commentTextWrapper.find('textarea');
                    \$(\".buttons-change-comment\").remove();
                    \$(\"#changeAttachmentFile\").remove();
                    textarea.replaceWith(\"<p>\" + textarea.text() + \"</p>\");
                    var p = wrapper.find('.comment-text p');
                    var wdith = \$(p).css('width');
                    p.replaceWith(\"<textarea class='edit'>\" + p.text() + \"</textarea>\");
                    wrapper.find('.comment-text').append('<form enctype=\"multipart/form-data\"><input type=\"file\" id=\"changeAttachmentFile\" name=\"attachmentFile\" class=\"attach-file\" /></form>');
                    wrapper.find('.comment-text').append(\"<div class=\\\"buttons-change-comment\\\"><button class=\\\"update-comment\\\">Update</button><button class=\\\"cancel-comment\\\">Cancel</button></div>\");
                    \$(\".edit\").css(\"width\", wdith);
                    return false;
                });

                \$(this).on('click', '.cancel-comment', function(){
                    \$('.uploaded-file-block').remove();
                    \$('.attach-file').show();
                    \$(\"#note\").val('');
                    \$('.hide-notes-info').remove();
                    var textarea = commentTextWrapper.find('textarea');
                    \$(\".buttons-change-comment\").remove();
                    \$(\"#changeAttachmentFile\").remove();
                    textarea.replaceWith(\"<p>\" + textarea.text() + \"</p>\");
                });

                \$(this).on('click', '.update-comment', function(){
                    var textarea = wrapper.find('.comment-text').find('textarea');
                    var value = {};
                    value['note'] = \$(textarea).val();
                    value['noteId'] = wrapper.find('.noteId').val();
                    value['lead_id'] = wrapper.find('.lead_id').val();
                    value['originalFileName'] = wrapper.find('.originalFileName').val();
                    value['fileName'] = wrapper.find('.fileName').val();

                    console.log('sending ajax to ' + ajaxUrl);
                    console.log(value);

                    \$.ajax(ajaxUrl, {
                        'data': value,
                        'type': 'POST',
                        'success': function(response) {
                            console.log('ajax success');
                            wrapper.find('.uploaded-file-block').remove();
                            var textarea = currentCommentTextWrapper.find('textarea');
                            \$(\".update-comment\").remove();
                            textarea.replaceWith(\"<p>\" + textarea.val() + \"</p>\");
                            if(value['fileName'] && value['originalFileName']) {
                                currentCommentTextWrapper.find('.file-link').remove();
                                currentCommentTextWrapper.append('<a target=\"_blank\" class=\"file-link\" href=\"' + wrapper.find('.path').val() + '\">' + value['originalFileName'] + '</a>');
                            }
                            //window.location.reload();
                        },
                        'error': function() {
                            console.log('ajax error');
                            alert('A error occured while AJAX request.');
                        }
                    });
                });
            });

            \$('.custom-form-content').on('click', '.exclude-new', function(){
                \$(this).parents('.group-forms').remove();
                return false;
            });

            \$('.show-more').on('click', function(){
                \$('article').show();
                \$(this).hide();
                return false;
            });

            \$('.title-wrap-simple').on('click', '.transition-opportunity', function(){
                var textClickButton = \$(this).html();
                var popupP = \$(\".popup-window p\");
                var popupText = popupP.html();
                popupP.html(popupText.replace(\"%change_status%\", textClickButton));
                \$popupWrapper.dialog('open');
            });

            var leadNotesWrapper = \$('#lead_notes');

            leadNotesWrapper.on('change', '.attach-file', function(){
                \$('.uploaded-file-block').remove();
                \$('.attach-file').show();
                \$('.hide-notes-info').remove();
                return ajaxFileUpload(\$(this).attr('id'), \$(this).parents('form'));
            });

            leadNotesWrapper.on('click', '.delete-file', function(){
                \$('.uploaded-file-block').remove();
                \$('input[name=fileName]').remove();
                \$('input[name=originalFileName]').remove();
                console.log(\$(this).parents('div'));
               // \$(this).parents('form').find('.attach-file').show();
                \$('.attach-file').show();
                return false;
            });

<<<<<<< HEAD
            var scoringHandler = new ScoringHandler();
            scoringHandler.init('.criteria-list');
=======
            var generalWrapper = \$('.content');

            generalWrapper.on('click', '.filter-widget', function() {
                if (\$(this).hasClass('hidden-widget')) {
                    \$(this).removeClass('hidden-widget');
                    \$(this).attr('value', 'Hide widgets');
                    \$('.col-md-6').css('width', '37%');
                } else {
                    \$(this).addClass('hidden-widget');
                    \$(this).attr('value', 'Show widgets')
                    \$('.col-md-6').css('width', '50%');
                }
                generalWrapper.find('.right-column').toggle();

            });

>>>>>>> b543613431b0487c9f621c085e60ffc29bb51d84
        };
        \$(document).ready(setTimeout(_init, 30));
    })(jQuery);


    var ScoringHandler = function(){
        var block;

    };

    ScoringHandler.prototype={

        init: function(selector){
            this.block = \$(selector);
            this._attachHandlers();
            this.calculate();
        },

        _attachHandlers: function(){
            var self = this;
            this.block.on('click', '.criteria-input', function(){
                self.calculate();
            });
        },

        calculate: function(){
            var count = 0;
            this.block.find('.criteria-input:checked').each(function(){
                count += parseFloat(\$(this).data('criteria-value'));
            });

            this.block.find('.criteria-score').val(parseFloat(Math.floor(count * 100 * 10000) / 10000).toFixed(3));
        }



    };

    function receivedText() {
        //result = fr.result;
        document.getElementById('editor').appendChild(document.createTextNode(fr.result))
    }

    function ajaxFileUpload(id, attachWrapper)
    {
        var ajaxUrl = \"";
        // line 388
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "getBaseURL", array(), "method"), "html", null, true);
        echo "/ajax/leads_display/leadNoteAttach\";
        console.log(ajaxUrl);
        var wrapper = \$('#lead_notes');

        \$.ajaxFileUpload
        (
            {
                url: ajaxUrl,
                secureuri:false,
                fileElementId:id,
                dataType: 'json',
                success: function (data, status)
                {
                    \$('#'+id).hide();
                    var hrefFile = \"/uploads/attachments/\" + data.fileName.replace(/\"/g,\"\");
                    attachWrapper.append('<div class=\"uploaded-file-block\"><a id=\"blah\" target=\"_blank\" href='+ data.path +' alt=\"your image\" >'+data.originalFileName+'</a> <a href=\"#\" class=\"delete-file\"><i class=\"fa fa-times\"></i></a></div>');
                    attachWrapper.append(\"<input class=\\\"hide-notes-info fileName\\\" type=\\\"hidden\\\" value=\" + data.fileName + \" name=\\\"fileName\\\" />\");
                    attachWrapper.append(\"<input class=\\\"hide-notes-info originalFileName\\\" type=\\\"hidden\\\" value=\" + data.originalFileName + \" name=\\\"originalFileName\\\" />\");
                    attachWrapper.append(\"<input class=\\\"hide-notes-info path\\\" type=\\\"hidden\\\" value=\" + data.path + \"  />\");
                },
                error: function (data, status, e)
                {
                    alert(e);
                }
            }
        )

        return false;

    }
</script>
";
    }

    public function getTemplateName()
    {
        return "@ZesharCRMCore/CRUD/DisplayPartial/lead_opportunity_show_block_actions_js.html.twig.orig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  414 => 388,  220 => 197,  122 => 102,  19 => 1,);
    }
}
/* <script type=text/javascript>*/
/*     (function($) {*/
/* */
/*         var _init = function() {*/
/*             $popupWrapper = $(".popup-window");*/
/*             $popupWrapper.dialog({*/
/*                 modal: true,*/
/*                 resizable: false,*/
/*                 autoOpen: false,*/
/*                 buttons: {*/
/*                     "Yes": function() {*/
/*                         $(this).dialog("close");*/
/*                     },*/
/*                     "Cancel": function() {*/
/*                         $(this).dialog("close");*/
/*                     }*/
/*                 }*/
/*             });*/
/* */
/*             $(".datepicker").each(function() {*/
/* */
/*                 var parsedDate = $.datepicker.parseDate('M d, Y', $(this).val());*/
/* */
/*                 $(this).text($.datepicker.formatDate('M d, Y', parsedDate));*/
/*             });*/
/* */
/* */
/*             $("body").on("click", ".datepicker", function(){*/
/*                 if (!$(this).hasClass("hasDatepicker"))*/
/*                 {*/
/*                     $(this).datepicker();*/
/*                     $(this).datepicker("show");*/
/*                 }*/
/*             });*/
/*             $('.display-block-persistent').each(function() {*/
/* */
/*                 var block = this;*/
/* */
/*                 $(this).on('click', '.btn-cancel-block', function(e) {*/
/*                     $('form')[0].reset();*/
/*                     return false;*/
/*                 });*/
/* */
/*                 $(this).on('click', '.btn-save-block', function(e) {*/
/* */
/*                     var controller = $(block).data('controller');*/
/*                     if (!controller) {*/
/*                         console.log('no controller defined');*/
/*                         return;*/
/*                     }*/
/*                     var action = $(block).data('action');*/
/*                     if (!action) {*/
/*                         console.log('no action defined');*/
/*                         return;*/
/*                     }*/
/* */
/*                     //var operation = $(this).data(''); // in the future*/
/* */
/*                     var values = {};*/
/* */
/*                     $(block).find('input, select, textarea, button').each(function() {*/
/*                         var key = $(this).attr('name');*/
/*                         if (!key) {*/
/*                             key = $(this).attr('id');*/
/*                         }*/
/*                         if(!key){*/
/*                             return;*/
/*                         }*/
/*                         if (this.getAttribute('type') == 'radio' ) {*/
/*                             if(this.hasAttribute('checked')) {*/
/*                                 values[key] = $(this).val();*/
/*                             }*/
/*                         } else if(key.indexOf('[]') !== false && this.getAttribute('type') == 'checkbox'){*/
/* */
/*                             if(!values[key]){*/
/*                                 values[key] = [];*/
/*                             }*/
/* */
/*                             if($(this).prop('checked')) {*/
/* */
/*                                 values[key].push($(this).val());*/
/*                             }*/
/*                         } else {*/
/*                             if ($(this).hasClass('btn-green-border')) {*/
/*                                 if($(this).hasClass('checkButton')) {*/
/*                                     values[key] = $(this).val();*/
/*                                 }*/
/*                             } else {*/
/*                                 values[key] = $(this).val();*/
/*                             }*/
/*                         }*/
/*                     });*/
/* */
/*                     // allow validation*/
/*                     var params = {values: values, isValid: true};*/
/*                     $(this).trigger('block-data-validate', [params]);*/
/*                     if (!params.isValid) {*/
/*                         console.log('validation error');*/
/*                         return;*/
/*                     }*/
/* */
/*                     var ajaxUrl = "{{ app.request.getBaseURL() }}/ajax/" + controller + "/" + action;*/
/* */
/*                     console.log('sending ajax to ' + ajaxUrl);*/
/*                     console.log(values);*/
/* */
/*                     $.ajax(ajaxUrl, {*/
/*                         'data': values,*/
/*                         'type': 'POST',*/
/*                         'success': function(response) {*/
/*                             console.log('ajax success');*/
/*                             $(block).trigger('block-ajax-return', [response]);*/
/*                         },*/
/*                         'error': function() {*/
/*                             console.log('ajax error');*/
/*                             alert('A error occured while AJAX request.');*/
/*                         }*/
/*                     });*/
/* */
/*                     e.preventDefault();*/
/* */
/*                 });*/
/*             });*/
/* */
/*             $('.form-group').each(function() {*/
/* */
/*                 var radioButton = $(this).find('.radio');*/
/*                 var buttonAction = $(this).find('.btn-green-border');*/
/* */
/* */
/*                 radioButton.on('click', function(e) {*/
/*                     radioButton.removeAttr('checked');*/
/*                     this.checked = true;*/
/*                     this.setAttribute('checked', 'checked')*/
/*                 });*/
/* */
/*                 buttonAction.on('click', function(e) {*/
/*                     var currentButton = $(this).hasClass('checkButton');*/
/*                     buttonAction.removeClass('checkButton');*/
/*                     if (!currentButton){*/
/*                         $(this).addClass('checkButton');*/
/*                     } else {*/
/*                         $(this).removeClass('checkButton');*/
/*                     }*/
/* */
/*                 });*/
/* */
/*             });*/
/* */
/*             $('.custom-form-content').each(function(){*/
/*                 var groups = $(this).find('.group-forms');*/
/*                 $count = 0;*/
/*                 $(groups).each(function(){*/
/*                     $(this).each(function(){*/
/*                         $($(this).find('[name]')).each(function(){*/
/*                             var name = $(this).attr('name').toString().replace(/\$\$name\$\$/g, $count);*/
/*                             $(this).attr('name', name);*/
/*                         });*/
/*                     });*/
/*                     $count++;*/
/*                 });*/
/*             });*/
/* */
/*             $('.group-forms').each(function(){*/
/*                 var currentWrapper = $(this);*/
/*                 var parentWrapper = $(this).parents('.custom-form-content');*/
/*                 var addButton = $(this).find('.add-new');*/
/*                 var clearAll = $(this).find('.clear-all');*/
/* */
/*                 var elementsCount = parentWrapper.find($('.group-forms')).length;*/
/* */
/*                 addButton.on('click', function(){*/
/*                     var newWidget = parentWrapper.data("prototype");*/
/*                     newWidget = newWidget.replace(/\$\$name\$\$/g, elementsCount);*/
/*                     parentWrapper.append(newWidget);*/
/*                     elementsCount++;*/
/*                 });*/
/* */
/*                 clearAll.on('click', function(){*/
/*                     currentWrapper.find('input:not(.autoId, .driverId, .insuredAddressId)').each(function () {*/
/* */
/*                         $(this).val('');*/
/*                     });*/
/*                     currentWrapper.find('select').each(function () {*/
/*                         $(this).val($("select option:first").val());*/
/*                     });*/
/*                     return false;*/
/*                 });*/
/* */
/* */
/*             });*/
/* */
/*             $('article').each(function(){*/
/*                 var wrapper = $(this);*/
/*                 var commentTextWrapper = $('.comment-text');*/
/*                 var currentCommentTextWrapper = $(this).find('.comment-text');*/
/*                 var ajaxUrl = "{{ app.request.getBaseURL() }}/ajax/leads_display/leadNote";*/
/* */
/* */
/*                 $(this).on('click', '.comment-delete', function(){*/
/*                     var value = {};*/
/*                     value['noteId'] = wrapper.find('.noteId').val();*/
/*                     value['lead_id'] = wrapper.find('.lead_id').val();*/
/* */
/*                     $.ajax(ajaxUrl, {*/
/*                         'data': value,*/
/*                         'type': 'POST',*/
/*                         'success': function(response) {*/
/*                             console.log('ajax success');*/
/*                             wrapper.remove();*/
/*                         },*/
/*                         'error': function() {*/
/*                             console.log('ajax error');*/
/*                             alert('A error occured while AJAX request.');*/
/*                         }*/
/*                     });*/
/*                     return false;*/
/*                 });*/
/* */
/*                 $(this).on('click', '.comment-edit', function(){*/
/*                     $('.uploaded-file-block').remove();*/
/*                     $('.attach-file').show();*/
/*                     $("#note").val('');*/
/*                     $('.hide-notes-info').remove();*/
/*                     var textarea = commentTextWrapper.find('textarea');*/
/*                     $(".buttons-change-comment").remove();*/
/*                     $("#changeAttachmentFile").remove();*/
/*                     textarea.replaceWith("<p>" + textarea.text() + "</p>");*/
/*                     var p = wrapper.find('.comment-text p');*/
/*                     var wdith = $(p).css('width');*/
/*                     p.replaceWith("<textarea class='edit'>" + p.text() + "</textarea>");*/
/*                     wrapper.find('.comment-text').append('<form enctype="multipart/form-data"><input type="file" id="changeAttachmentFile" name="attachmentFile" class="attach-file" /></form>');*/
/*                     wrapper.find('.comment-text').append("<div class=\"buttons-change-comment\"><button class=\"update-comment\">Update</button><button class=\"cancel-comment\">Cancel</button></div>");*/
/*                     $(".edit").css("width", wdith);*/
/*                     return false;*/
/*                 });*/
/* */
/*                 $(this).on('click', '.cancel-comment', function(){*/
/*                     $('.uploaded-file-block').remove();*/
/*                     $('.attach-file').show();*/
/*                     $("#note").val('');*/
/*                     $('.hide-notes-info').remove();*/
/*                     var textarea = commentTextWrapper.find('textarea');*/
/*                     $(".buttons-change-comment").remove();*/
/*                     $("#changeAttachmentFile").remove();*/
/*                     textarea.replaceWith("<p>" + textarea.text() + "</p>");*/
/*                 });*/
/* */
/*                 $(this).on('click', '.update-comment', function(){*/
/*                     var textarea = wrapper.find('.comment-text').find('textarea');*/
/*                     var value = {};*/
/*                     value['note'] = $(textarea).val();*/
/*                     value['noteId'] = wrapper.find('.noteId').val();*/
/*                     value['lead_id'] = wrapper.find('.lead_id').val();*/
/*                     value['originalFileName'] = wrapper.find('.originalFileName').val();*/
/*                     value['fileName'] = wrapper.find('.fileName').val();*/
/* */
/*                     console.log('sending ajax to ' + ajaxUrl);*/
/*                     console.log(value);*/
/* */
/*                     $.ajax(ajaxUrl, {*/
/*                         'data': value,*/
/*                         'type': 'POST',*/
/*                         'success': function(response) {*/
/*                             console.log('ajax success');*/
/*                             wrapper.find('.uploaded-file-block').remove();*/
/*                             var textarea = currentCommentTextWrapper.find('textarea');*/
/*                             $(".update-comment").remove();*/
/*                             textarea.replaceWith("<p>" + textarea.val() + "</p>");*/
/*                             if(value['fileName'] && value['originalFileName']) {*/
/*                                 currentCommentTextWrapper.find('.file-link').remove();*/
/*                                 currentCommentTextWrapper.append('<a target="_blank" class="file-link" href="' + wrapper.find('.path').val() + '">' + value['originalFileName'] + '</a>');*/
/*                             }*/
/*                             //window.location.reload();*/
/*                         },*/
/*                         'error': function() {*/
/*                             console.log('ajax error');*/
/*                             alert('A error occured while AJAX request.');*/
/*                         }*/
/*                     });*/
/*                 });*/
/*             });*/
/* */
/*             $('.custom-form-content').on('click', '.exclude-new', function(){*/
/*                 $(this).parents('.group-forms').remove();*/
/*                 return false;*/
/*             });*/
/* */
/*             $('.show-more').on('click', function(){*/
/*                 $('article').show();*/
/*                 $(this).hide();*/
/*                 return false;*/
/*             });*/
/* */
/*             $('.title-wrap-simple').on('click', '.transition-opportunity', function(){*/
/*                 var textClickButton = $(this).html();*/
/*                 var popupP = $(".popup-window p");*/
/*                 var popupText = popupP.html();*/
/*                 popupP.html(popupText.replace("%change_status%", textClickButton));*/
/*                 $popupWrapper.dialog('open');*/
/*             });*/
/* */
/*             var leadNotesWrapper = $('#lead_notes');*/
/* */
/*             leadNotesWrapper.on('change', '.attach-file', function(){*/
/*                 $('.uploaded-file-block').remove();*/
/*                 $('.attach-file').show();*/
/*                 $('.hide-notes-info').remove();*/
/*                 return ajaxFileUpload($(this).attr('id'), $(this).parents('form'));*/
/*             });*/
/* */
/*             leadNotesWrapper.on('click', '.delete-file', function(){*/
/*                 $('.uploaded-file-block').remove();*/
/*                 $('input[name=fileName]').remove();*/
/*                 $('input[name=originalFileName]').remove();*/
/*                 console.log($(this).parents('div'));*/
/*                // $(this).parents('form').find('.attach-file').show();*/
/*                 $('.attach-file').show();*/
/*                 return false;*/
/*             });*/
/* */
/* <<<<<<< HEAD*/
/*             var scoringHandler = new ScoringHandler();*/
/*             scoringHandler.init('.criteria-list');*/
/* =======*/
/*             var generalWrapper = $('.content');*/
/* */
/*             generalWrapper.on('click', '.filter-widget', function() {*/
/*                 if ($(this).hasClass('hidden-widget')) {*/
/*                     $(this).removeClass('hidden-widget');*/
/*                     $(this).attr('value', 'Hide widgets');*/
/*                     $('.col-md-6').css('width', '37%');*/
/*                 } else {*/
/*                     $(this).addClass('hidden-widget');*/
/*                     $(this).attr('value', 'Show widgets')*/
/*                     $('.col-md-6').css('width', '50%');*/
/*                 }*/
/*                 generalWrapper.find('.right-column').toggle();*/
/* */
/*             });*/
/* */
/* >>>>>>> b543613431b0487c9f621c085e60ffc29bb51d84*/
/*         };*/
/*         $(document).ready(setTimeout(_init, 30));*/
/*     })(jQuery);*/
/* */
/* */
/*     var ScoringHandler = function(){*/
/*         var block;*/
/* */
/*     };*/
/* */
/*     ScoringHandler.prototype={*/
/* */
/*         init: function(selector){*/
/*             this.block = $(selector);*/
/*             this._attachHandlers();*/
/*             this.calculate();*/
/*         },*/
/* */
/*         _attachHandlers: function(){*/
/*             var self = this;*/
/*             this.block.on('click', '.criteria-input', function(){*/
/*                 self.calculate();*/
/*             });*/
/*         },*/
/* */
/*         calculate: function(){*/
/*             var count = 0;*/
/*             this.block.find('.criteria-input:checked').each(function(){*/
/*                 count += parseFloat($(this).data('criteria-value'));*/
/*             });*/
/* */
/*             this.block.find('.criteria-score').val(parseFloat(Math.floor(count * 100 * 10000) / 10000).toFixed(3));*/
/*         }*/
/* */
/* */
/* */
/*     };*/
/* */
/*     function receivedText() {*/
/*         //result = fr.result;*/
/*         document.getElementById('editor').appendChild(document.createTextNode(fr.result))*/
/*     }*/
/* */
/*     function ajaxFileUpload(id, attachWrapper)*/
/*     {*/
/*         var ajaxUrl = "{{ app.request.getBaseURL() }}/ajax/leads_display/leadNoteAttach";*/
/*         console.log(ajaxUrl);*/
/*         var wrapper = $('#lead_notes');*/
/* */
/*         $.ajaxFileUpload*/
/*         (*/
/*             {*/
/*                 url: ajaxUrl,*/
/*                 secureuri:false,*/
/*                 fileElementId:id,*/
/*                 dataType: 'json',*/
/*                 success: function (data, status)*/
/*                 {*/
/*                     $('#'+id).hide();*/
/*                     var hrefFile = "/uploads/attachments/" + data.fileName.replace(/"/g,"");*/
/*                     attachWrapper.append('<div class="uploaded-file-block"><a id="blah" target="_blank" href='+ data.path +' alt="your image" >'+data.originalFileName+'</a> <a href="#" class="delete-file"><i class="fa fa-times"></i></a></div>');*/
/*                     attachWrapper.append("<input class=\"hide-notes-info fileName\" type=\"hidden\" value=" + data.fileName + " name=\"fileName\" />");*/
/*                     attachWrapper.append("<input class=\"hide-notes-info originalFileName\" type=\"hidden\" value=" + data.originalFileName + " name=\"originalFileName\" />");*/
/*                     attachWrapper.append("<input class=\"hide-notes-info path\" type=\"hidden\" value=" + data.path + "  />");*/
/*                 },*/
/*                 error: function (data, status, e)*/
/*                 {*/
/*                     alert(e);*/
/*                 }*/
/*             }*/
/*         )*/
/* */
/*         return false;*/
/* */
/*     }*/
/* </script>*/
/* */
