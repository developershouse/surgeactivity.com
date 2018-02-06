<?php

/* ZesharCRMCoreBundle:CRUD/DisplayPartial:lead_opportunity_show_block_actions_js.html.twig */
class __TwigTemplate_2cecff7a7d4a832de177bf0641c660db2d7b504a63d2ad8f3480e7fd1654b6d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'spinner' => array($this, 'block_spinner'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('spinner', $context, $blocks);
        // line 4
        echo "<script type=text/javascript>
    (function(\$) {

        var _init = function(\$) {
            // slides
            console.log('init function');
            \$('.lead-opp-edit-slides .custom-head .up-custom').on('click', function() {
                var currentBlock = \$(this).parent().parent().next();

                \$('.lead-opp-edit-slides .custom-head').each(function() {
                    var slideBlock = \$(this).next();

                    if (slideBlock.get(0) != currentBlock.get(0)) {
                        if (slideBlock.css('display') == 'block') {
                            slideBlock.slideToggle();
                            \$(this).find('.up-custom').addClass('close');
                        }
                    }
                });
            });

            // slides
            \$('.lead-opp-edit-slides .custom-form-head .up-custom').on('click', function() {
                var currentBlock = \$(this).parent().parent().next();

                \$('.lead-opp-edit-slides .custom-form-head').each(function() {
                    var slideBlock = \$(this).next();

                    if (slideBlock.get(0) != currentBlock.get(0)) {
                        if (slideBlock.css('display') == 'block') {
                            slideBlock.slideToggle();
                            \$(this).find('.up-custom').addClass('close');
                        }
                    }
                });
            });

            // prequalification edit
            \$('.lead-opp-edit-slides .opp-prequalification-show .btn-success').on('click', function() {
                \$('.lead-opp-edit-slides .opp-prequalification-show').hide();
                \$('.lead-opp-edit-slides .opp-prequalification-edit').show();
                \$('.lead-opp-edit-slides .opp-prequalification-edit #lead_prequalification_edit').show();

                if (\$('.lead-opp-edit-slides .opp-prequalification-edit .up-custom').hasClass('close')) {
                    \$('.lead-opp-edit-slides .opp-prequalification-edit .up-custom').removeClass('close')
                }
            });
            \$('.lead-opp-edit-slides .opp-prequalification-edit .btn-cancel-block').on('click', function() {
                \$('.lead-opp-edit-slides .opp-prequalification-edit').hide();
                \$('.lead-opp-edit-slides .opp-prequalification-show').show();
                \$('.lead-opp-edit-slides .opp-prequalification-show #lead_prequalification_save').show();

                if (\$('.lead-opp-edit-slides .opp-prequalification-show .up-custom').hasClass('close')) {
                    \$('.lead-opp-edit-slides .opp-prequalification-show .up-custom').removeClass('close')
                }
            });

            var eventWrapper = \$('.calendar-block');

            var eachArticle = function(){
                \$('article').each(function(){
                    var wrapper = \$(this);
                    var commentTextWrapper = \$('.comment-text');
                    var currentCommentTextWrapper = \$(this).find('.comment-text');
                    var ajaxUrl = \"";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "getBaseURL", array(), "method"), "html", null, true);
        echo "/ajax/leads_display/leadNote\";


                    \$(this).on('click', '.comment-delete', function(e) {
                        var value = {};
                        value['noteId'] = wrapper.find('.noteId').val();
                        value['lead_id'] = wrapper.find('.lead_id').val();

                        \$.ajax(ajaxUrl, {
                            'data': value,
                            'type': 'POST',
                            'success': function (response) {
                                console.log('ajax success');
                                wrapper.remove();
                            },
                            'error': function (error) {
                                console.log('ajax error');
                                console.log(error);
                                //alert('A error occured while AJAX request.');
                            }
                        });
                        e.preventDefault();
                        return false;
                    });

                        \$(this).on('click', '.comment-edit', function (e) {
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
                            e.preventDefault();
                            return false;
                        });

                        \$(this).on('click', '.cancel-comment', function () {
                            \$('.uploaded-file-block').remove();
                            \$('.attach-file').show();
                            \$(\"#note\").val('');
                            \$('.hide-notes-info').remove();
                            var textarea = commentTextWrapper.find('textarea');
                            \$(\".buttons-change-comment\").remove();
                            \$(\"#changeAttachmentFile\").remove();
                            textarea.replaceWith(\"<p>\" + textarea.text() + \"</p>\");
                        });

                        \$(this).on('click', '.update-comment', function (e) {
                            var textarea = wrapper.find('.comment-text').find('textarea');
                            var value = {};
                            value['note'] = \$(textarea).val();
                            value['noteId'] = wrapper.find('.noteId').val();
                            value['lead_id'] = wrapper.find('.lead_id').val();
                            value['originalFileName'] = wrapper.find('.originalFileName').val();
                            value['fileName'] = wrapper.find('.fileName').val();

                            console.log('sending ajax to ' + ajaxUrl);

                            \$.ajax(ajaxUrl, {
                                'data': value,
                                'type': 'POST',
                                'success': function (response) {
                                    console.log('ajax success');
                                    wrapper.find('.uploaded-file-block').remove();
                                    var textarea = currentCommentTextWrapper.find('textarea');
                                    \$(\".buttons-change-comment\").remove();
                                    textarea.replaceWith(\"<p>\" + textarea.val() + \"</p>\");
                                    if (value['fileName'] && value['originalFileName']) {
                                        currentCommentTextWrapper.find('.file-link').remove();
                                        currentCommentTextWrapper.append('<a target=\"_blank\" class=\"file-link\" href=\"' + wrapper.find('.path').val() + '\">' + value['originalFileName'] + '</a>');
                                    }
                                    //window.location.reload();
                                },
                                'error': function (error) {
                                    console.log('ajax error');
                                    console.log(error);
                                    //alert('A error occured while AJAX request.');
                                }
                            });
                            e.preventDefault();
                        });
                    });
                };

            eachArticle();

            var dialogHandler = function () {
                var status;
                var lead;
                var leadCampaign;

                var yesCallback = function (e) {
                    var url = \"";
        // line 168
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "getBaseURL", array(), "method"), "html", null, true);
        echo "/ajax/leads_display/transitionOpportunity\";
                    var data = {'status': status, 'lead': lead, 'leadCampaign': leadCampaign};
                    if (status == 'opportunity_to_sold') {
                        var effective_dt = \$(\"input[name='effective_date']\").val();
                        data.effective_dt = effective_dt !== undefined ? effective_dt : \"\";
                    }

                    \$.ajax(url, {
                        'data': data,
                        'dataType': 'json',
                        'type': 'POST',
                        'success': function (response) {
                            if (response.redirect) {
                                console.log(response.redirect);
                                window.location.href = response.redirect;
                            } else {
                                console.log(response);
                                //alert('Error');
                            }

                        },
                        'error': function (error) {
                            console.log('ajax error');
                            console.log(error);
                            //alert('A error occured while AJAX request.');
                        }
                    });
                    e.preventDefault();
                };

                popupWrapper = \$(\".popup-window\");
                popupWrapper.dialog({
                    modal: true,
                    resizable: false,
                    autoOpen: false,
                    buttons: {
                        \"Yes\": yesCallback,
                        \"Cancel\": function () {
                            \$(this).dialog(\"close\");
                        }
                    }
                });




                var saveSoldCallback = function (e) {
                    //console.log(\$(this));
                    if (!status) {
                        status = 'opportunity_to_sold';
                    }

                    var data = {'status': status, 'lead': lead};
//                    popupWrapperSold.find('input').each(function () {
//                        var key = \$(this).attr('name');
//                        if (!key) {
//                            key = \$(this).attr('id');
//                        }
//                        if (!key) {
//                            return false;
//                        }
//                        data[key] = \$(this).val();
//                    });
                    var url = \"";
        // line 231
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "getBaseURL", array(), "method"), "html", null, true);
        echo "/ajax/leads_display/transitionOpportunity\";
//                    console.log(data);

                    \$.ajax(url, {
                        'data': data,
                        'dataType': 'json',
                        'type': 'POST',
                        'success': function (response) {
                            if (response.redirect) {
                                console.log(response.redirect);
                                window.location.href = response.redirect;
                            } else {
                                console.log(response);
                                //alert('Error');
                            }
                        },
                        'error': function (error) {
                            console.log('ajax error');
                            console.log(error);
                            //alert('A error occured while AJAX request.');
                        }
                    });

                    e.preventDefault();

                };

                \$('.title-wrap-simple').on('click', '.transition-opportunity', function () {
                    status = \$(this).data('status');
                    lead = \$(this).parents('.top-actions').data('leadId');
                    leadCampaign = \$(this).parents('.top-actions').data('lead-campaign');
//                    if (status == 'opportunity_to_sold') {
//                        var effective_dt = \$(\"input[name='effective_date']\").val();
////                        setInputValue(\"#premium\", amount);
////                        setInputValue(\"#vehicle_count\", quantity);
////                        setInputValue(\"#effective_dt\", effective_dt);
//                        dialogHandler(e);
//                    } else {
                        var textClickButton = \$(this).html();
                        var popupP = \$(\".popup-window p\");
                        var popupText = popupP.html();
                        popupP.html(popupText.replace(\"%change_status%\", textClickButton));
                        popupWrapper.dialog('open');
//                    }
                });

                var popupWrapperSold = \$(\".popup-window-sold\");

                popupWrapperSold.dialog({
                    //modal: true,
                    // resizable: false,
                    height: 685,
                    width: 500,
                    autoOpen: false,
                    dialogClass: \"custom-block\",
                    buttons: {
                        \"Save\": saveSoldCallback,
                        \"Cancel\": function () {
                            \$(this).dialog(\"close\");
                        }
                    },
                    create: function () {
                        \$('.ui-dialog-titlebar-close').remove();
                        \$(this).closest(\".ui-dialog\")
                                .find(\".ui-dialog-buttonset button\").each(function () {
                                    \$(this).addClass(\"btn-save-block btn btn-green\");
                                }); // the first button

                    }
                });

                var setInputValue = function (selector, value) {
                    if (value !== undefined && value.length > 0) {
                        popupWrapperSold.find(selector).val(value).prop('disabled', true);
                    }
                }

            };

            dialogHandler();

            \$('.custom-form-content').each(function () {
                var groups = \$(this).find('.group-forms');
                var count = 0;

                \$(groups).each(function () {
                    var countTicket = 0;
                    \$(this).each(function () {
                        var currentElem = \$(this);
                        \$(this).find('[name]').each(function () {
                            var name = \$(this).attr('name').toString().replace(/\\\$\\\$name\\\$\\\$/g, count);
                            \$(this).attr('name', name);
                        });
                        \$(this).find('[id]').each(function () {
                            var name = \$(this).attr('id').toString().replace(/\\\$\\\$name\\\$\\\$/g, count);
                            \$(this).attr('id', name);
                        });
                        \$(this).find('.form-group.plus').each(function () {
                            \$(this).find('[name]').each(function () {
                                var name = \$(this).attr('name').toString().replace(/\\\$\\\$ticketName\\\$\\\$/g, countTicket);
                                \$(this).attr('name', name);
                            });
                            countTicket++;
                        });

                    });

                    count++;
                });
            });



            var count = 0;
            \$('.form-group.plus').each(function () {
                var count = 0;
            });

            \$.datepicker.setDefaults(\$.datepicker.regional[\"\"]);
            \$.datepicker.setDefaults({
                dateFormat: 'M d, yy'
            });

            \$(\".datepicker-product\").each(function () {

                var parsedDate = \$.datepicker.parseDate('M d, yy', \$(this).val());
                \$(this).datepicker()
                        .datepicker(\$.datepicker.regional[\"en-GB\"]).datepicker(\"option\", \"dateFormat\", \"M d, yy\")
                        .datepicker('setDate', parsedDate);

            });

            \$(\".datepicker-processing\").each(function () {

                var parsedDate = \$.datepicker.parseDate('M d, yy', \$(this).val());
                \$(this).datepicker()
                        .datepicker(\$.datepicker.regional[\"en-GB\"]).datepicker(\"option\", \"dateFormat\", \"M d, yy\")
                        .datepicker('setDate', parsedDate);

            });

            \$('.display-block-persistent').each(function(e) {
                var block = this;
                if(block.id) {
                    var spinner = new Spinner(block.id);
                    spinner.create({});
                    spinner.hide();
                }


                \$(this).on('click', '.btn-cancel-block', function(e) {
                    \$('form')[0].reset();
                    return false;
                });

                var saveCurrentBlock = function(e) {
                    if(spinner) {
                        spinner.init();
                        spinner.show();
                    }
                    var result = saveBlock(e, block);

                    if (result.success) {
                        var response = result.response;
                        if (response.redirect) {
                            window.location.href = routList;
                        } else {
                            if (\"";
        // line 398
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), "html", null, true);
        echo "\" != \"admin_zesharcrm_core_lead_create\") {
                                \$(block).trigger('block-ajax-return', [response]);
                            }
                            eachArticle();
                        }
                        \$(block).find('input[type=\"text\"]').val('');
                        \$(block).find('textarea').val('');
                        \$('div[id ^= \"ui-id-\"]').dialog(\"close\");
                    }

                };

                \$(this).on('click', '.btn-save-block', function (e) {

                    saveCurrentBlock(e);

                });

                var popupEmailSend = \$(\".popup-window-email\");

                popupEmailSend.dialog({
//                 modal: true,
                    resizable: false,
                    height: 600,
                    width: 500,
                    autoOpen: false,
                    dialogClass: \"custom-block\",
                    buttons: {
                        \"Send\": saveCurrentBlock,
                        \"Cancel\": function () {
                            \$(this).dialog(\"close\");
                        }
                    },
                    create: function() {
                        \$('.ui-dialog-titlebar-close').remove();
                        \$(this).closest(\".ui-dialog\")
                                .find(\".ui-dialog-buttonset button\").each(function() {
                                    \$(this).addClass(\"btn-save-block btn btn-green\");
                                }); // the first button

                    }
                });

                \$('.email-tab').on('click', 'a.send-email', function() {
                    var objectId = \$(this).parent().parent().attr('objectid');
                    \$('.popup-window-email').find('#lead_id').val(objectId);
                    \$('.popup-window-email').find('#email_to').val(\$(this).html());
                    console.log(objectId);
                    popupEmailSend.dialog('open');
                    return false;
                });

                //e.preventDefault();

            });

            if (\$('#lead_event_list').length) {
                var delete_spinner = new Spinner('lead_event_list');
                delete_spinner.create({});
                delete_spinner.hide();
                \$('#lead_event_list').on('click', '.delete-event', function () {
                    delete_spinner.init();
                    delete_spinner.show();
                    var ajaxUrl = \"";
        // line 461
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "getBaseURL", array(), "method"), "html", null, true);
        echo "/ajax/leads_display/leadDeleteEvent\";
                    var eventLine = \$(this).parents('.existing-event-line');
                    var eventId = eventLine.data('eventId');
                    var data = {
                        'event_id': eventId
                    };
                    \$.ajax(ajaxUrl, {
                        'data': data,
                        'type': 'POST',
                        'success': function (response) {
                            console.log('ajax success');
                            eventLine.remove();
                            delete_spinner.hide();
                        },
                        'error': function (error) {
                            console.log('ajax error');
                            console.log(error);
                            delete_spinner.hide();
                            //alert('A error occured while AJAX request.');
                        }
                    });
                });
            }

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
                    if (!currentButton) {
                        \$(this).addClass('checkButton');
                    } else {
                        \$(this).removeClass('checkButton');
                    }

                });

            });

//            \$('.additional-block').each(function () {
//                var dataWrap = \$(this).find('.tickets-group');
//                if (dataWrap.length > 0) {
//                    var replaceData = dataWrap.data(\"prototypeField\").toString().replace(/\\\"/g, '\$HGF&%\$');
//                    dataWrap.removeData(\"prototypeField\");
////                    dataWrap.data(\"prototypeField\", replaceData);
////                    console.log(dataWrap.data(\"prototypeField\"));
//                }
//
//            });

            var leadProcessingSave = \$(\"#lead_processing_save\");

            \$.fn.replaceOptions = function(options) {
                console.log(options);
                var self, \$option;

                this.empty();
                self = this;
                \$option = \$(\"<option></option>\")
                        .attr(\"value\", '')
                        .text(' - Select One -');
                self.append(\$option);
                \$.each(options, function(index, option) {
                    console.log(option.id);
                    console.log(option.title);
                    \$option = \$(\"<option></option>\")
                            .attr(\"value\", option.id)
                            .text(option.title);
                    self.append(\$option);
                });
            };

            leadProcessingSave.on('change', '#assignee', function(){
                var controller = leadProcessingSave.data('controller');
                var leadCampaign = leadProcessingSave.find(\"#leadCampaign\");
                leadCampaign.prop('disabled', 'disabled');
                var action = 'getActivitiesByAssignee';
                var data = {
                    'assigneeId': \$(this).val()
                };
                var ajaxUrl = \"";
        // line 551
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "getBaseURL", array(), "method"), "html", null, true);
        echo "/ajax/\" + controller + \"/\" + action;
                \$.ajax(ajaxUrl, {
                    'data': data,
                    'type': 'POST',
                    'success': function (response) {
                        console.log(response);
                        if (response.activities !== undefined) {
                            var activities = \$.parseJSON(response.activities);
                            leadCampaign.replaceOptions(activities);
                            leadCampaign.prop('disabled', false);
                        }
                    },
                    'error': function (error) {
                        console.log('ajax error');
                        console.log(error);
                    }
                });

            });


            \$('.group-forms').each(function () {
                var currentWrapper = \$(this);
                var parentWrapper = \$(this).parents('.custom-form-content');
                var addButton = \$(this).find('.add-new');
                var clearAll = \$(this).find('.clear-all');

                //parentWrapper.find('')

                var elementsCount = parentWrapper.find(\$('.group-forms')).length;
                var elementsTicketCount = parentWrapper.find(\$('.form-group.plus')).length;

                addButton.on('click', function () {
                    var newWidget = parentWrapper.data(\"prototype\");
                    console.log(newWidget);

                    newWidget = newWidget.replace(/\\\$\\\$name\\\$\\\$/g, elementsCount);
                    newWidget = newWidget.replace(/\\\$\\\$ticketName\\\$\\\$/g, elementsTicketCount);
                    parentWrapper.append(newWidget);

                    elementsCount++;
                    var event = jQuery.Event(\"block-section-added\");
                    \$(\"#lead_prequalification_save\").trigger('block-section-added', []);

                });

                clearAll.on('click', function () {
                    currentWrapper.find('input:not(.autoId, .driverId, .insuredAddressId)').each(function () {
                        \$(this).val('');
                    });
                    currentWrapper.find('select').each(function () {
                        \$(this).val(\$(\"select option:first\").val());
                    });
                    return false;
                });

                \$('.prequalification-drive-group').on('click', '.add-ticket-field', function(){
                    var click = \$(this);
                    click.parents('.group-forms').each(function(){
                        if (currentWrapper.find('input.driverId').val() == \$(this).find('input.driverId').val()) {
                            var plusWrapper = click.parents('.tickets-group');
                            var newWidgetField = plusWrapper.data(\"prototypeField\");
                            var text = \$.parseJSON('\"' + newWidgetField.replace(/([^\\\\]|^)\\\\x/g, '\$1\\\\u00') + '\"');
                            text = text.replace(/\\\$\\\$name\\\$\\\$/g, elementsCount-1);
                            text = text.replace(/\\\$\\\$ticketName\\\$\\\$/g, elementsTicketCount);

                            console.log(text);
                            plusWrapper.append(text);
                            elementsTicketCount++;

                        }
                    });

                    return false;
                });

                currentWrapper.on('click', '.remove-ticket-field', function(){
                    var minusWrapper = \$(this).parents('.form-group.plus');
                    minusWrapper.remove();
                    return false;
                });

            });


            \$('.custom-form-content').on('click', '.exclude-new', function(){
                \$(this).parents('.group-forms').remove();
                return false;
            });
            var leadNotesWrapper = \$('#lead_notes');

            leadNotesWrapper.on('click', '.show-more', function(){
                if (\$(this).hasClass('shown')) {
                    \$(this).removeClass('shown');
                    \$(this).html('Show All Notes');
                    \$('article').hide();
                    \$('.comments-list > article:lt(2)').show();
                } else {
                    \$(this).addClass('shown');
                    \$(this).html('Show Less Notes');
                    \$('article').show();
                }
                return false;
            });




            eventWrapper.on('click', '.existing-event-line', function(){
                var allFields = \$(this).find('td');
                \$('#lead_event_create').append('<input type=\"hidden\" id=\"event_id\" name=\"event_id\" value=\"' + \$(this).data('eventId') + '\" />');
                \$(allFields).each(function(){
                    var fieldTitle = \$(this).data('eventField');
                    if (fieldTitle == 'happensAt') {
                        var dateTime = \$(this).data('eventFieldVal').split(' ');
                        var date = new Date(dateTime[0]);
                        eventWrapper.find('.datepicker').datepicker('setDate', date);
                        eventWrapper.find('.timepicker').timepicker('setTime', dateTime[1]);
                    } else {
                        eventWrapper.find('#' + fieldTitle).val(\$(this).data('eventFieldVal'));
                    }

                });

               // eventWrapper.find();
            });

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
               // \$(this).parents('form').find('.attach-file').show();
                \$('.attach-file').show();
                return false;
            });

            var scoringHandler = new ScoringHandler();
            scoringHandler.init('.criteria-list');

            var contactDetailsHandler = new ContactDetailsHandler();
            contactDetailsHandler.init();

            \$('body').on(\"block-section-added\", \"#lead_prequalification_save\",function(e){

                \$(\".datepicker-product \").not(\".hasDatepicker\").each(function(){

                    \$(this).datepicker()
                            .datepicker( \$.datepicker.regional[ \"en\" ] ).datepicker( \"option\", \"dateFormat\", \"M d, yy\" );

                    if(\$(this).val().length){
                        var parsedDate = \$.datepicker.parseDate('M d, yy', \$(this).val());
                        \$(this).datepicker('setDate', parsedDate);

                    }
                });
                \$(\".datepicker-processing \").not(\".hasDatepicker\").each(function(){

                    \$(this).datepicker()
                            .datepicker( \$.datepicker.regional[ \"en\" ] ).datepicker( \"option\", \"dateFormat\", \"M d, yy\" );

                    if(\$(this).val().length){
                        var parsedDate = \$.datepicker.parseDate('M d, yy', \$(this).val());
                        \$(this).datepicker('setDate', parsedDate);
                    }
                });

            });

            var getFormDataByBlock = function(block) {
                var values = {};

                \$(block).find('input, select, textarea, button').each(function () {
                    var key = \$(this).attr('name');
                    if (!key) {
                        key = \$(this).attr('id');
                    }
                    if (!key) {
                        return;
                    }

                    if (this.getAttribute('type') == 'radio') {
                        if (this.hasAttribute('checked')) {
                            values[key] = \$(this).val();
                        }
                    } else if (key.indexOf('[]') !== false && this.getAttribute('type') == 'checkbox') {

                        if (!values[key]) {
                            values[key] = [];
                        }

                        if (\$(this).prop('checked')) {

                            values[key].push(\$(this).val());
                        }
                    } else if (key.indexOf('[') !== -1) {
                        var parts = key.split(/[[\\]]{1,2}/);
                        parts.length--;
                        var length = parts.length;

                        var value = {};
                        var tempValue = {};
                        for (var index = length-1; index > 0; index--) {
                            if (index == length-1) {
                                value[parts[index]] = \$(this).val();
                            } else {
                                tempValue = value;
                                value = {};
                                value[parts[index]] = tempValue;
                                tempValue = {};
                            }
                        }

                        MergeRecursive(value,values[parts[0]]);

                        values[parts[0]] = value;

                    } else {
                        if (\$(this).hasClass('btn-green-border')) {
                            if (\$(this).hasClass('checkButton')) {
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

                return values;
            };

            var  MergeRecursive = function(obj1, obj2) {

                for (var p in obj2) {
                    try {
                        // Property in destination object set; update its value.
                        if ( obj2[p].constructor==Object ) {
                            obj1[p] = MergeRecursive(obj1[p], obj2[p]);

                        } else {
                            obj1[p] = obj2[p];

                        }

                    } catch(e) {
                        // Property in destination object not set; create it and set its value.
                        obj1[p] = obj2[p];

                    }
                }

                return obj1;
            };

            var saveBlock = function(e, block) {
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

                var values = getFormDataByBlock(block);

                var ajaxUrl = \"";
        // line 835
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "getBaseURL", array(), "method"), "html", null, true);
        echo "/ajax/\" + controller + \"/\" + action;
                var routList = \"";
        // line 836
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "list"), "method"), "html", null, true);
        echo "\";

                console.log('sending ajax to ' + ajaxUrl);
                var result = [];
                result.success = false;
                \$.ajax(ajaxUrl, {
                    'data': values,
                    'type': 'POST',
                    'success': function (response) {
                        result.success = true;
                        console.log('ajax success');

                        if (response.redirect) {
                            window.location.href = routList;
                        } else {
                            eachArticle();
                        }
                        \$(block).find('input[type=\"text\"]').val('');
                        \$(block).find('textarea').val('');
                        \$('div[id ^= \"ui-id-\"]').dialog(\"close\");
                        \$(block).data().plugin_loading.hide();

                    },
                    'error': function (error) {
                        result.success = false;
                        console.log('ajax error');
                        console.log(error);
                        \$(block).data().plugin_loading.hide();
                    }
                });

                return result;
            };

            \$('.show-page').on('click', '.btn-all-save', function(e){
                var params = {};
                params['saveDetails'] = contactDetailsHandler._getForm();
                \$(\".display-block-persistent:not(.email-form)\").each(function (e) {
                    var name = \$(this).data('action');

                    if (params[name]) {
                        params[name] = \$.extend(params[name], getFormDataByBlock(this));
                    } else {
                        params[name] = getFormDataByBlock(this);
                    }
                });

                var value = {'forms': params};
                var ajaxUrl = \"";
        // line 884
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "getBaseURL", array(), "method"), "html", null, true);
        echo "/ajax/leads_display/saveAllDataLead\";
                ";
        // line 886
        echo "
                \$.ajax(ajaxUrl, {
                    'data': value,
                    'type': 'POST',
                    'success': function (response) {
                        console.log('ajax success');
                        window.location.replace(\"";
        // line 892
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateObjectUrl", array(0 => "show", 1 => (isset($context["object"]) ? $context["object"] : null)), "method"), "html", null, true);
        echo "\");
                    },
                    'error': function (error) {
                        console.log('ajax error');
                        console.log(error);
                    }
                });

                e.preventDefault();

            });

            \$('.make-call').on('click', function() {
                \$('input[name=contact_status][value=1]').attr('checked', true);
                \$('select[name=contact_type]').val(1);
                \$('select[name=contact_result]').val(6);
            });

            \$('.send-email').on('click', function() {
                \$('input[name=contact_status][value=1]').attr('checked', true);
                \$('select[name=contact_type]').val(4);
                \$('select[name=contact_result]').val(6);
            });
        };
        \$(function() {
            _init(\$)
        });
    })(window.jQuery);

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
            \$('body').on('reset', 'form', function(){
                self.calculate();
            });
        },

        calculate: function(){
            var count = 0;
            this.block.find('.criteria-input:checked').each(function(){
                count += parseFloat(\$(this).data('criteria-value'));
            });
            var humanCount = parseFloat(Math.floor(count * 100 * 10000) / 10000);

            this.block.find('.criteria-score').val(humanCount);
            \$('.lead-score').text(Math.round(humanCount) + '%');
        }



    };

    var ContactDetailsHandler = function(){
        var textBlock, formBlock, editButton, saveButton, copyFromLeadButton, cancelButton, chooseButton, wrap, contactCardField;
    };

    ContactDetailsHandler.prototype = {
        init: function(){
            this.textBlock = \$('.entity-details-table-text');
            this.formBlock = \$('.entity-details-table-form');
            this.editButton = \$('.entity-details-edit');
            this.cancelButton = \$('.entity-details-edit-cancel');
            this.chooseButton = \$('.entity-details-choose-contact');
            this.saveButton = \$('.entity-details-save');
            this.copyFromLeadButton = \$('.inline-edit-copy-from-lead');
            this.wrap = \$('div.entity-details-wrap');
            this.contactCardField = \$('.contactCardEntryPoint');
            this._attachHandlers();

            this._hideDouble();
        },

        _hideDouble: function(){
            if(this._getCurrentForm().find('.entity-details-table-text').length){
                this._showText();
            } else {
                this._showForm();
            }
        },

        _getCurrentForm: function(){
            return \$('.entity-details .tab-content .tab-pane.active');
        },

        _getLeadForm: function(){
            return \$('.entity-details .tab-content .tab-pane.pane-lead-details');
        },

        _attachHandlers: function(){
            var self = this;
            \$(this.editButton).on('click',  function(e){
                self._showForm();
                e.preventDefault();
            });

            \$(this.saveButton).on('click',  function(e){

                self._saveBlock();
                self._showText();
                e.preventDefault();
            });

            \$(this.cancelButton).on('click', function(e){
                self._showText();
                e.preventDefault();
            });

            \$(this.copyFromLeadButton).on('click', function(e){
                var values = {};
                values['copyFromLead'] = 'true';
                var block = self._getLeadForm();
                self._saveBlock(values, block);
                self._showText();
                e.preventDefault();
            });

            \$(this.contactCardField).on('change', function(e){
                var values = {};
                values['selectedCard'] = \$(this).val();
                self._saveBlock(values);
            });

            if(\$('#for_choose_id').length) {
                var chooseSpinner = Spinner(\"for_choose_id\");
                chooseSpinner.create({});
                chooseSpinner.hide();
                \$('#'+\$('.modal')[1].id).on('hidden.bs.modal', function () {
                    chooseSpinner.hide();
                })
            }
            \$(this.chooseButton).on('click', function(e){
                if (chooseSpinner) {
                    chooseSpinner.init();
                    chooseSpinner.show();
                }
                \$(self.contactCardField).parents('.field-container')
                        .find('.field-actions a[title=\"List\"]').trigger('click');
                e.preventDefault();
            });

            \$('.block-tabs a[data-toggle=\"tab\"]').on('shown.bs.tab', function (e) {


               self._hideDouble();


            });


        },

        _showForm: function(){
            \$(this.copyFromLeadButton).hide();
            \$(this.textBlock).hide();
            \$(this.formBlock).show();
            \$(this.editButton).hide();
            \$(this.cancelButton).show();
            \$(this.saveButton).show();
            if(this._getCurrentForm().hasClass('pane-opportunity-details')){
                \$(this.copyFromLeadButton).show();
            }
        },

        _showText: function(){
            \$(this.copyFromLeadButton).hide();
            \$(this.textBlock).show();
            \$(this.formBlock).hide();
            \$(this.editButton).show();
            \$(this.cancelButton).hide();
            \$(this.saveButton).hide();
        },

        _getForm: function(defaultValues, block) {
            var values = defaultValues || {};

            var form = block || this._getCurrentForm();

            form.find('input, select, textarea').each(function () {
                var key = \$(this).attr('name');
                if (!key) {
                    key = \$(this).attr('id');
                }
                if (!key) {
                    return;
                }
                if (this.getAttribute('type') == 'radio') {
                    if (this.hasAttribute('checked')) {
                        values[key] = \$(this).val();
                    }
                } else if (key.indexOf('[]') !== false && this.getAttribute('type') == 'checkbox') {

                    if (!values[key]) {
                        values[key] = [];
                    }

                    if (\$(this).prop('checked')) {

                        values[key].push(\$(this).val());
                    }
                } else {
                    if (\$(this).hasClass('btn-green-border')) {
                        if (\$(this).hasClass('checkButton')) {
                            values[key] = \$(this).val();
                        }
                    } else {
                        values[key] = \$(this).val();
                    }
                }
            });

            return values;
        },

        _saveBlock: function(defaultValues, block){

            var values = this._getForm(defaultValues, block);
//            \$([this.editButton, this.cancelButton, this.copyFromLeadButton, this.saveButton]).hide();
//            var defaultValues = {  };
//            var options = { validate: true, name: \"bar\" };
//
//            /* merge defaults and options, without modifying defaults */
//            var val = \$.extend({}, defaults, options);


            var url = \"";
        // line 1131
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "getBaseURL", array(), "method"), "html", null, true);
        echo "/ajax/leads_display/saveDetails\";
            var self = this;
            \$.ajax(url, {
                'data': values,
                'type': 'POST',
                'dataType':'json',
                'success': function (response) {
                    if(response.content){
                        \$(self.wrap).html(response.content);
                        window.gapi_init();
                        self.init();
                    }else{
                        //window.alert(response.message);
                        console.log(response);
                    }
                },
                'error': function (error) {
                    console.log('ajax error');
                    console.log(error);
                    //alert('A error occured while AJAX request.');
                }
            });
        }
    };

    function receivedText() {
        //result = fr.result;
        document.getElementById('editor').appendChild(document.createTextNode(fr.result))
    }

    function ajaxFileUpload(id, attachWrapper)
    {
        var ajaxUrl = \"";
        // line 1163
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "getBaseURL", array(), "method"), "html", null, true);
        echo "/ajax/leads_display/leadNoteAttach\";
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
                    //alert(e);
                    console.log(e);
                }
            }
        )

        return false;

    }
</script>
";
    }

    // line 1
    public function block_spinner($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $this->loadTemplate("loading_spinner.html.twig", "ZesharCRMCoreBundle:CRUD/DisplayPartial:lead_opportunity_show_block_actions_js.html.twig", 2)->display($context);
    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:CRUD/DisplayPartial:lead_opportunity_show_block_actions_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1256 => 2,  1253 => 1,  1217 => 1163,  1182 => 1131,  940 => 892,  932 => 886,  928 => 884,  877 => 836,  873 => 835,  586 => 551,  493 => 461,  427 => 398,  257 => 231,  191 => 168,  88 => 68,  22 => 4,  20 => 1,);
    }
}
/* {% block spinner %}*/
/*     {% include 'loading_spinner.html.twig' %}*/
/* {% endblock %}*/
/* <script type=text/javascript>*/
/*     (function($) {*/
/* */
/*         var _init = function($) {*/
/*             // slides*/
/*             console.log('init function');*/
/*             $('.lead-opp-edit-slides .custom-head .up-custom').on('click', function() {*/
/*                 var currentBlock = $(this).parent().parent().next();*/
/* */
/*                 $('.lead-opp-edit-slides .custom-head').each(function() {*/
/*                     var slideBlock = $(this).next();*/
/* */
/*                     if (slideBlock.get(0) != currentBlock.get(0)) {*/
/*                         if (slideBlock.css('display') == 'block') {*/
/*                             slideBlock.slideToggle();*/
/*                             $(this).find('.up-custom').addClass('close');*/
/*                         }*/
/*                     }*/
/*                 });*/
/*             });*/
/* */
/*             // slides*/
/*             $('.lead-opp-edit-slides .custom-form-head .up-custom').on('click', function() {*/
/*                 var currentBlock = $(this).parent().parent().next();*/
/* */
/*                 $('.lead-opp-edit-slides .custom-form-head').each(function() {*/
/*                     var slideBlock = $(this).next();*/
/* */
/*                     if (slideBlock.get(0) != currentBlock.get(0)) {*/
/*                         if (slideBlock.css('display') == 'block') {*/
/*                             slideBlock.slideToggle();*/
/*                             $(this).find('.up-custom').addClass('close');*/
/*                         }*/
/*                     }*/
/*                 });*/
/*             });*/
/* */
/*             // prequalification edit*/
/*             $('.lead-opp-edit-slides .opp-prequalification-show .btn-success').on('click', function() {*/
/*                 $('.lead-opp-edit-slides .opp-prequalification-show').hide();*/
/*                 $('.lead-opp-edit-slides .opp-prequalification-edit').show();*/
/*                 $('.lead-opp-edit-slides .opp-prequalification-edit #lead_prequalification_edit').show();*/
/* */
/*                 if ($('.lead-opp-edit-slides .opp-prequalification-edit .up-custom').hasClass('close')) {*/
/*                     $('.lead-opp-edit-slides .opp-prequalification-edit .up-custom').removeClass('close')*/
/*                 }*/
/*             });*/
/*             $('.lead-opp-edit-slides .opp-prequalification-edit .btn-cancel-block').on('click', function() {*/
/*                 $('.lead-opp-edit-slides .opp-prequalification-edit').hide();*/
/*                 $('.lead-opp-edit-slides .opp-prequalification-show').show();*/
/*                 $('.lead-opp-edit-slides .opp-prequalification-show #lead_prequalification_save').show();*/
/* */
/*                 if ($('.lead-opp-edit-slides .opp-prequalification-show .up-custom').hasClass('close')) {*/
/*                     $('.lead-opp-edit-slides .opp-prequalification-show .up-custom').removeClass('close')*/
/*                 }*/
/*             });*/
/* */
/*             var eventWrapper = $('.calendar-block');*/
/* */
/*             var eachArticle = function(){*/
/*                 $('article').each(function(){*/
/*                     var wrapper = $(this);*/
/*                     var commentTextWrapper = $('.comment-text');*/
/*                     var currentCommentTextWrapper = $(this).find('.comment-text');*/
/*                     var ajaxUrl = "{{ app.request.getBaseURL() }}/ajax/leads_display/leadNote";*/
/* */
/* */
/*                     $(this).on('click', '.comment-delete', function(e) {*/
/*                         var value = {};*/
/*                         value['noteId'] = wrapper.find('.noteId').val();*/
/*                         value['lead_id'] = wrapper.find('.lead_id').val();*/
/* */
/*                         $.ajax(ajaxUrl, {*/
/*                             'data': value,*/
/*                             'type': 'POST',*/
/*                             'success': function (response) {*/
/*                                 console.log('ajax success');*/
/*                                 wrapper.remove();*/
/*                             },*/
/*                             'error': function (error) {*/
/*                                 console.log('ajax error');*/
/*                                 console.log(error);*/
/*                                 //alert('A error occured while AJAX request.');*/
/*                             }*/
/*                         });*/
/*                         e.preventDefault();*/
/*                         return false;*/
/*                     });*/
/* */
/*                         $(this).on('click', '.comment-edit', function (e) {*/
/*                             $('.uploaded-file-block').remove();*/
/*                             $('.attach-file').show();*/
/*                             $("#note").val('');*/
/*                             $('.hide-notes-info').remove();*/
/*                             var textarea = commentTextWrapper.find('textarea');*/
/*                             $(".buttons-change-comment").remove();*/
/*                             $("#changeAttachmentFile").remove();*/
/*                             textarea.replaceWith("<p>" + textarea.text() + "</p>");*/
/*                             var p = wrapper.find('.comment-text p');*/
/*                             var wdith = $(p).css('width');*/
/*                             p.replaceWith("<textarea class='edit'>" + p.text() + "</textarea>");*/
/*                             wrapper.find('.comment-text').append('<form enctype="multipart/form-data"><input type="file" id="changeAttachmentFile" name="attachmentFile" class="attach-file" /></form>');*/
/*                             wrapper.find('.comment-text').append("<div class=\"buttons-change-comment\"><button class=\"update-comment\">Update</button><button class=\"cancel-comment\">Cancel</button></div>");*/
/*                             $(".edit").css("width", wdith);*/
/*                             e.preventDefault();*/
/*                             return false;*/
/*                         });*/
/* */
/*                         $(this).on('click', '.cancel-comment', function () {*/
/*                             $('.uploaded-file-block').remove();*/
/*                             $('.attach-file').show();*/
/*                             $("#note").val('');*/
/*                             $('.hide-notes-info').remove();*/
/*                             var textarea = commentTextWrapper.find('textarea');*/
/*                             $(".buttons-change-comment").remove();*/
/*                             $("#changeAttachmentFile").remove();*/
/*                             textarea.replaceWith("<p>" + textarea.text() + "</p>");*/
/*                         });*/
/* */
/*                         $(this).on('click', '.update-comment', function (e) {*/
/*                             var textarea = wrapper.find('.comment-text').find('textarea');*/
/*                             var value = {};*/
/*                             value['note'] = $(textarea).val();*/
/*                             value['noteId'] = wrapper.find('.noteId').val();*/
/*                             value['lead_id'] = wrapper.find('.lead_id').val();*/
/*                             value['originalFileName'] = wrapper.find('.originalFileName').val();*/
/*                             value['fileName'] = wrapper.find('.fileName').val();*/
/* */
/*                             console.log('sending ajax to ' + ajaxUrl);*/
/* */
/*                             $.ajax(ajaxUrl, {*/
/*                                 'data': value,*/
/*                                 'type': 'POST',*/
/*                                 'success': function (response) {*/
/*                                     console.log('ajax success');*/
/*                                     wrapper.find('.uploaded-file-block').remove();*/
/*                                     var textarea = currentCommentTextWrapper.find('textarea');*/
/*                                     $(".buttons-change-comment").remove();*/
/*                                     textarea.replaceWith("<p>" + textarea.val() + "</p>");*/
/*                                     if (value['fileName'] && value['originalFileName']) {*/
/*                                         currentCommentTextWrapper.find('.file-link').remove();*/
/*                                         currentCommentTextWrapper.append('<a target="_blank" class="file-link" href="' + wrapper.find('.path').val() + '">' + value['originalFileName'] + '</a>');*/
/*                                     }*/
/*                                     //window.location.reload();*/
/*                                 },*/
/*                                 'error': function (error) {*/
/*                                     console.log('ajax error');*/
/*                                     console.log(error);*/
/*                                     //alert('A error occured while AJAX request.');*/
/*                                 }*/
/*                             });*/
/*                             e.preventDefault();*/
/*                         });*/
/*                     });*/
/*                 };*/
/* */
/*             eachArticle();*/
/* */
/*             var dialogHandler = function () {*/
/*                 var status;*/
/*                 var lead;*/
/*                 var leadCampaign;*/
/* */
/*                 var yesCallback = function (e) {*/
/*                     var url = "{{ app.request.getBaseURL() }}/ajax/leads_display/transitionOpportunity";*/
/*                     var data = {'status': status, 'lead': lead, 'leadCampaign': leadCampaign};*/
/*                     if (status == 'opportunity_to_sold') {*/
/*                         var effective_dt = $("input[name='effective_date']").val();*/
/*                         data.effective_dt = effective_dt !== undefined ? effective_dt : "";*/
/*                     }*/
/* */
/*                     $.ajax(url, {*/
/*                         'data': data,*/
/*                         'dataType': 'json',*/
/*                         'type': 'POST',*/
/*                         'success': function (response) {*/
/*                             if (response.redirect) {*/
/*                                 console.log(response.redirect);*/
/*                                 window.location.href = response.redirect;*/
/*                             } else {*/
/*                                 console.log(response);*/
/*                                 //alert('Error');*/
/*                             }*/
/* */
/*                         },*/
/*                         'error': function (error) {*/
/*                             console.log('ajax error');*/
/*                             console.log(error);*/
/*                             //alert('A error occured while AJAX request.');*/
/*                         }*/
/*                     });*/
/*                     e.preventDefault();*/
/*                 };*/
/* */
/*                 popupWrapper = $(".popup-window");*/
/*                 popupWrapper.dialog({*/
/*                     modal: true,*/
/*                     resizable: false,*/
/*                     autoOpen: false,*/
/*                     buttons: {*/
/*                         "Yes": yesCallback,*/
/*                         "Cancel": function () {*/
/*                             $(this).dialog("close");*/
/*                         }*/
/*                     }*/
/*                 });*/
/* */
/* */
/* */
/* */
/*                 var saveSoldCallback = function (e) {*/
/*                     //console.log($(this));*/
/*                     if (!status) {*/
/*                         status = 'opportunity_to_sold';*/
/*                     }*/
/* */
/*                     var data = {'status': status, 'lead': lead};*/
/* //                    popupWrapperSold.find('input').each(function () {*/
/* //                        var key = $(this).attr('name');*/
/* //                        if (!key) {*/
/* //                            key = $(this).attr('id');*/
/* //                        }*/
/* //                        if (!key) {*/
/* //                            return false;*/
/* //                        }*/
/* //                        data[key] = $(this).val();*/
/* //                    });*/
/*                     var url = "{{ app.request.getBaseURL() }}/ajax/leads_display/transitionOpportunity";*/
/* //                    console.log(data);*/
/* */
/*                     $.ajax(url, {*/
/*                         'data': data,*/
/*                         'dataType': 'json',*/
/*                         'type': 'POST',*/
/*                         'success': function (response) {*/
/*                             if (response.redirect) {*/
/*                                 console.log(response.redirect);*/
/*                                 window.location.href = response.redirect;*/
/*                             } else {*/
/*                                 console.log(response);*/
/*                                 //alert('Error');*/
/*                             }*/
/*                         },*/
/*                         'error': function (error) {*/
/*                             console.log('ajax error');*/
/*                             console.log(error);*/
/*                             //alert('A error occured while AJAX request.');*/
/*                         }*/
/*                     });*/
/* */
/*                     e.preventDefault();*/
/* */
/*                 };*/
/* */
/*                 $('.title-wrap-simple').on('click', '.transition-opportunity', function () {*/
/*                     status = $(this).data('status');*/
/*                     lead = $(this).parents('.top-actions').data('leadId');*/
/*                     leadCampaign = $(this).parents('.top-actions').data('lead-campaign');*/
/* //                    if (status == 'opportunity_to_sold') {*/
/* //                        var effective_dt = $("input[name='effective_date']").val();*/
/* ////                        setInputValue("#premium", amount);*/
/* ////                        setInputValue("#vehicle_count", quantity);*/
/* ////                        setInputValue("#effective_dt", effective_dt);*/
/* //                        dialogHandler(e);*/
/* //                    } else {*/
/*                         var textClickButton = $(this).html();*/
/*                         var popupP = $(".popup-window p");*/
/*                         var popupText = popupP.html();*/
/*                         popupP.html(popupText.replace("%change_status%", textClickButton));*/
/*                         popupWrapper.dialog('open');*/
/* //                    }*/
/*                 });*/
/* */
/*                 var popupWrapperSold = $(".popup-window-sold");*/
/* */
/*                 popupWrapperSold.dialog({*/
/*                     //modal: true,*/
/*                     // resizable: false,*/
/*                     height: 685,*/
/*                     width: 500,*/
/*                     autoOpen: false,*/
/*                     dialogClass: "custom-block",*/
/*                     buttons: {*/
/*                         "Save": saveSoldCallback,*/
/*                         "Cancel": function () {*/
/*                             $(this).dialog("close");*/
/*                         }*/
/*                     },*/
/*                     create: function () {*/
/*                         $('.ui-dialog-titlebar-close').remove();*/
/*                         $(this).closest(".ui-dialog")*/
/*                                 .find(".ui-dialog-buttonset button").each(function () {*/
/*                                     $(this).addClass("btn-save-block btn btn-green");*/
/*                                 }); // the first button*/
/* */
/*                     }*/
/*                 });*/
/* */
/*                 var setInputValue = function (selector, value) {*/
/*                     if (value !== undefined && value.length > 0) {*/
/*                         popupWrapperSold.find(selector).val(value).prop('disabled', true);*/
/*                     }*/
/*                 }*/
/* */
/*             };*/
/* */
/*             dialogHandler();*/
/* */
/*             $('.custom-form-content').each(function () {*/
/*                 var groups = $(this).find('.group-forms');*/
/*                 var count = 0;*/
/* */
/*                 $(groups).each(function () {*/
/*                     var countTicket = 0;*/
/*                     $(this).each(function () {*/
/*                         var currentElem = $(this);*/
/*                         $(this).find('[name]').each(function () {*/
/*                             var name = $(this).attr('name').toString().replace(/\$\$name\$\$/g, count);*/
/*                             $(this).attr('name', name);*/
/*                         });*/
/*                         $(this).find('[id]').each(function () {*/
/*                             var name = $(this).attr('id').toString().replace(/\$\$name\$\$/g, count);*/
/*                             $(this).attr('id', name);*/
/*                         });*/
/*                         $(this).find('.form-group.plus').each(function () {*/
/*                             $(this).find('[name]').each(function () {*/
/*                                 var name = $(this).attr('name').toString().replace(/\$\$ticketName\$\$/g, countTicket);*/
/*                                 $(this).attr('name', name);*/
/*                             });*/
/*                             countTicket++;*/
/*                         });*/
/* */
/*                     });*/
/* */
/*                     count++;*/
/*                 });*/
/*             });*/
/* */
/* */
/* */
/*             var count = 0;*/
/*             $('.form-group.plus').each(function () {*/
/*                 var count = 0;*/
/*             });*/
/* */
/*             $.datepicker.setDefaults($.datepicker.regional[""]);*/
/*             $.datepicker.setDefaults({*/
/*                 dateFormat: 'M d, yy'*/
/*             });*/
/* */
/*             $(".datepicker-product").each(function () {*/
/* */
/*                 var parsedDate = $.datepicker.parseDate('M d, yy', $(this).val());*/
/*                 $(this).datepicker()*/
/*                         .datepicker($.datepicker.regional["en-GB"]).datepicker("option", "dateFormat", "M d, yy")*/
/*                         .datepicker('setDate', parsedDate);*/
/* */
/*             });*/
/* */
/*             $(".datepicker-processing").each(function () {*/
/* */
/*                 var parsedDate = $.datepicker.parseDate('M d, yy', $(this).val());*/
/*                 $(this).datepicker()*/
/*                         .datepicker($.datepicker.regional["en-GB"]).datepicker("option", "dateFormat", "M d, yy")*/
/*                         .datepicker('setDate', parsedDate);*/
/* */
/*             });*/
/* */
/*             $('.display-block-persistent').each(function(e) {*/
/*                 var block = this;*/
/*                 if(block.id) {*/
/*                     var spinner = new Spinner(block.id);*/
/*                     spinner.create({});*/
/*                     spinner.hide();*/
/*                 }*/
/* */
/* */
/*                 $(this).on('click', '.btn-cancel-block', function(e) {*/
/*                     $('form')[0].reset();*/
/*                     return false;*/
/*                 });*/
/* */
/*                 var saveCurrentBlock = function(e) {*/
/*                     if(spinner) {*/
/*                         spinner.init();*/
/*                         spinner.show();*/
/*                     }*/
/*                     var result = saveBlock(e, block);*/
/* */
/*                     if (result.success) {*/
/*                         var response = result.response;*/
/*                         if (response.redirect) {*/
/*                             window.location.href = routList;*/
/*                         } else {*/
/*                             if ("{{ app.request.attributes.get('_route') }}" != "admin_zesharcrm_core_lead_create") {*/
/*                                 $(block).trigger('block-ajax-return', [response]);*/
/*                             }*/
/*                             eachArticle();*/
/*                         }*/
/*                         $(block).find('input[type="text"]').val('');*/
/*                         $(block).find('textarea').val('');*/
/*                         $('div[id ^= "ui-id-"]').dialog("close");*/
/*                     }*/
/* */
/*                 };*/
/* */
/*                 $(this).on('click', '.btn-save-block', function (e) {*/
/* */
/*                     saveCurrentBlock(e);*/
/* */
/*                 });*/
/* */
/*                 var popupEmailSend = $(".popup-window-email");*/
/* */
/*                 popupEmailSend.dialog({*/
/* //                 modal: true,*/
/*                     resizable: false,*/
/*                     height: 600,*/
/*                     width: 500,*/
/*                     autoOpen: false,*/
/*                     dialogClass: "custom-block",*/
/*                     buttons: {*/
/*                         "Send": saveCurrentBlock,*/
/*                         "Cancel": function () {*/
/*                             $(this).dialog("close");*/
/*                         }*/
/*                     },*/
/*                     create: function() {*/
/*                         $('.ui-dialog-titlebar-close').remove();*/
/*                         $(this).closest(".ui-dialog")*/
/*                                 .find(".ui-dialog-buttonset button").each(function() {*/
/*                                     $(this).addClass("btn-save-block btn btn-green");*/
/*                                 }); // the first button*/
/* */
/*                     }*/
/*                 });*/
/* */
/*                 $('.email-tab').on('click', 'a.send-email', function() {*/
/*                     var objectId = $(this).parent().parent().attr('objectid');*/
/*                     $('.popup-window-email').find('#lead_id').val(objectId);*/
/*                     $('.popup-window-email').find('#email_to').val($(this).html());*/
/*                     console.log(objectId);*/
/*                     popupEmailSend.dialog('open');*/
/*                     return false;*/
/*                 });*/
/* */
/*                 //e.preventDefault();*/
/* */
/*             });*/
/* */
/*             if ($('#lead_event_list').length) {*/
/*                 var delete_spinner = new Spinner('lead_event_list');*/
/*                 delete_spinner.create({});*/
/*                 delete_spinner.hide();*/
/*                 $('#lead_event_list').on('click', '.delete-event', function () {*/
/*                     delete_spinner.init();*/
/*                     delete_spinner.show();*/
/*                     var ajaxUrl = "{{ app.request.getBaseURL() }}/ajax/leads_display/leadDeleteEvent";*/
/*                     var eventLine = $(this).parents('.existing-event-line');*/
/*                     var eventId = eventLine.data('eventId');*/
/*                     var data = {*/
/*                         'event_id': eventId*/
/*                     };*/
/*                     $.ajax(ajaxUrl, {*/
/*                         'data': data,*/
/*                         'type': 'POST',*/
/*                         'success': function (response) {*/
/*                             console.log('ajax success');*/
/*                             eventLine.remove();*/
/*                             delete_spinner.hide();*/
/*                         },*/
/*                         'error': function (error) {*/
/*                             console.log('ajax error');*/
/*                             console.log(error);*/
/*                             delete_spinner.hide();*/
/*                             //alert('A error occured while AJAX request.');*/
/*                         }*/
/*                     });*/
/*                 });*/
/*             }*/
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
/*                     if (!currentButton) {*/
/*                         $(this).addClass('checkButton');*/
/*                     } else {*/
/*                         $(this).removeClass('checkButton');*/
/*                     }*/
/* */
/*                 });*/
/* */
/*             });*/
/* */
/* //            $('.additional-block').each(function () {*/
/* //                var dataWrap = $(this).find('.tickets-group');*/
/* //                if (dataWrap.length > 0) {*/
/* //                    var replaceData = dataWrap.data("prototypeField").toString().replace(/\"/g, '$HGF&%$');*/
/* //                    dataWrap.removeData("prototypeField");*/
/* ////                    dataWrap.data("prototypeField", replaceData);*/
/* ////                    console.log(dataWrap.data("prototypeField"));*/
/* //                }*/
/* //*/
/* //            });*/
/* */
/*             var leadProcessingSave = $("#lead_processing_save");*/
/* */
/*             $.fn.replaceOptions = function(options) {*/
/*                 console.log(options);*/
/*                 var self, $option;*/
/* */
/*                 this.empty();*/
/*                 self = this;*/
/*                 $option = $("<option></option>")*/
/*                         .attr("value", '')*/
/*                         .text(' - Select One -');*/
/*                 self.append($option);*/
/*                 $.each(options, function(index, option) {*/
/*                     console.log(option.id);*/
/*                     console.log(option.title);*/
/*                     $option = $("<option></option>")*/
/*                             .attr("value", option.id)*/
/*                             .text(option.title);*/
/*                     self.append($option);*/
/*                 });*/
/*             };*/
/* */
/*             leadProcessingSave.on('change', '#assignee', function(){*/
/*                 var controller = leadProcessingSave.data('controller');*/
/*                 var leadCampaign = leadProcessingSave.find("#leadCampaign");*/
/*                 leadCampaign.prop('disabled', 'disabled');*/
/*                 var action = 'getActivitiesByAssignee';*/
/*                 var data = {*/
/*                     'assigneeId': $(this).val()*/
/*                 };*/
/*                 var ajaxUrl = "{{ app.request.getBaseURL() }}/ajax/" + controller + "/" + action;*/
/*                 $.ajax(ajaxUrl, {*/
/*                     'data': data,*/
/*                     'type': 'POST',*/
/*                     'success': function (response) {*/
/*                         console.log(response);*/
/*                         if (response.activities !== undefined) {*/
/*                             var activities = $.parseJSON(response.activities);*/
/*                             leadCampaign.replaceOptions(activities);*/
/*                             leadCampaign.prop('disabled', false);*/
/*                         }*/
/*                     },*/
/*                     'error': function (error) {*/
/*                         console.log('ajax error');*/
/*                         console.log(error);*/
/*                     }*/
/*                 });*/
/* */
/*             });*/
/* */
/* */
/*             $('.group-forms').each(function () {*/
/*                 var currentWrapper = $(this);*/
/*                 var parentWrapper = $(this).parents('.custom-form-content');*/
/*                 var addButton = $(this).find('.add-new');*/
/*                 var clearAll = $(this).find('.clear-all');*/
/* */
/*                 //parentWrapper.find('')*/
/* */
/*                 var elementsCount = parentWrapper.find($('.group-forms')).length;*/
/*                 var elementsTicketCount = parentWrapper.find($('.form-group.plus')).length;*/
/* */
/*                 addButton.on('click', function () {*/
/*                     var newWidget = parentWrapper.data("prototype");*/
/*                     console.log(newWidget);*/
/* */
/*                     newWidget = newWidget.replace(/\$\$name\$\$/g, elementsCount);*/
/*                     newWidget = newWidget.replace(/\$\$ticketName\$\$/g, elementsTicketCount);*/
/*                     parentWrapper.append(newWidget);*/
/* */
/*                     elementsCount++;*/
/*                     var event = jQuery.Event("block-section-added");*/
/*                     $("#lead_prequalification_save").trigger('block-section-added', []);*/
/* */
/*                 });*/
/* */
/*                 clearAll.on('click', function () {*/
/*                     currentWrapper.find('input:not(.autoId, .driverId, .insuredAddressId)').each(function () {*/
/*                         $(this).val('');*/
/*                     });*/
/*                     currentWrapper.find('select').each(function () {*/
/*                         $(this).val($("select option:first").val());*/
/*                     });*/
/*                     return false;*/
/*                 });*/
/* */
/*                 $('.prequalification-drive-group').on('click', '.add-ticket-field', function(){*/
/*                     var click = $(this);*/
/*                     click.parents('.group-forms').each(function(){*/
/*                         if (currentWrapper.find('input.driverId').val() == $(this).find('input.driverId').val()) {*/
/*                             var plusWrapper = click.parents('.tickets-group');*/
/*                             var newWidgetField = plusWrapper.data("prototypeField");*/
/*                             var text = $.parseJSON('"' + newWidgetField.replace(/([^\\]|^)\\x/g, '$1\\u00') + '"');*/
/*                             text = text.replace(/\$\$name\$\$/g, elementsCount-1);*/
/*                             text = text.replace(/\$\$ticketName\$\$/g, elementsTicketCount);*/
/* */
/*                             console.log(text);*/
/*                             plusWrapper.append(text);*/
/*                             elementsTicketCount++;*/
/* */
/*                         }*/
/*                     });*/
/* */
/*                     return false;*/
/*                 });*/
/* */
/*                 currentWrapper.on('click', '.remove-ticket-field', function(){*/
/*                     var minusWrapper = $(this).parents('.form-group.plus');*/
/*                     minusWrapper.remove();*/
/*                     return false;*/
/*                 });*/
/* */
/*             });*/
/* */
/* */
/*             $('.custom-form-content').on('click', '.exclude-new', function(){*/
/*                 $(this).parents('.group-forms').remove();*/
/*                 return false;*/
/*             });*/
/*             var leadNotesWrapper = $('#lead_notes');*/
/* */
/*             leadNotesWrapper.on('click', '.show-more', function(){*/
/*                 if ($(this).hasClass('shown')) {*/
/*                     $(this).removeClass('shown');*/
/*                     $(this).html('Show All Notes');*/
/*                     $('article').hide();*/
/*                     $('.comments-list > article:lt(2)').show();*/
/*                 } else {*/
/*                     $(this).addClass('shown');*/
/*                     $(this).html('Show Less Notes');*/
/*                     $('article').show();*/
/*                 }*/
/*                 return false;*/
/*             });*/
/* */
/* */
/* */
/* */
/*             eventWrapper.on('click', '.existing-event-line', function(){*/
/*                 var allFields = $(this).find('td');*/
/*                 $('#lead_event_create').append('<input type="hidden" id="event_id" name="event_id" value="' + $(this).data('eventId') + '" />');*/
/*                 $(allFields).each(function(){*/
/*                     var fieldTitle = $(this).data('eventField');*/
/*                     if (fieldTitle == 'happensAt') {*/
/*                         var dateTime = $(this).data('eventFieldVal').split(' ');*/
/*                         var date = new Date(dateTime[0]);*/
/*                         eventWrapper.find('.datepicker').datepicker('setDate', date);*/
/*                         eventWrapper.find('.timepicker').timepicker('setTime', dateTime[1]);*/
/*                     } else {*/
/*                         eventWrapper.find('#' + fieldTitle).val($(this).data('eventFieldVal'));*/
/*                     }*/
/* */
/*                 });*/
/* */
/*                // eventWrapper.find();*/
/*             });*/
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
/*                // $(this).parents('form').find('.attach-file').show();*/
/*                 $('.attach-file').show();*/
/*                 return false;*/
/*             });*/
/* */
/*             var scoringHandler = new ScoringHandler();*/
/*             scoringHandler.init('.criteria-list');*/
/* */
/*             var contactDetailsHandler = new ContactDetailsHandler();*/
/*             contactDetailsHandler.init();*/
/* */
/*             $('body').on("block-section-added", "#lead_prequalification_save",function(e){*/
/* */
/*                 $(".datepicker-product ").not(".hasDatepicker").each(function(){*/
/* */
/*                     $(this).datepicker()*/
/*                             .datepicker( $.datepicker.regional[ "en" ] ).datepicker( "option", "dateFormat", "M d, yy" );*/
/* */
/*                     if($(this).val().length){*/
/*                         var parsedDate = $.datepicker.parseDate('M d, yy', $(this).val());*/
/*                         $(this).datepicker('setDate', parsedDate);*/
/* */
/*                     }*/
/*                 });*/
/*                 $(".datepicker-processing ").not(".hasDatepicker").each(function(){*/
/* */
/*                     $(this).datepicker()*/
/*                             .datepicker( $.datepicker.regional[ "en" ] ).datepicker( "option", "dateFormat", "M d, yy" );*/
/* */
/*                     if($(this).val().length){*/
/*                         var parsedDate = $.datepicker.parseDate('M d, yy', $(this).val());*/
/*                         $(this).datepicker('setDate', parsedDate);*/
/*                     }*/
/*                 });*/
/* */
/*             });*/
/* */
/*             var getFormDataByBlock = function(block) {*/
/*                 var values = {};*/
/* */
/*                 $(block).find('input, select, textarea, button').each(function () {*/
/*                     var key = $(this).attr('name');*/
/*                     if (!key) {*/
/*                         key = $(this).attr('id');*/
/*                     }*/
/*                     if (!key) {*/
/*                         return;*/
/*                     }*/
/* */
/*                     if (this.getAttribute('type') == 'radio') {*/
/*                         if (this.hasAttribute('checked')) {*/
/*                             values[key] = $(this).val();*/
/*                         }*/
/*                     } else if (key.indexOf('[]') !== false && this.getAttribute('type') == 'checkbox') {*/
/* */
/*                         if (!values[key]) {*/
/*                             values[key] = [];*/
/*                         }*/
/* */
/*                         if ($(this).prop('checked')) {*/
/* */
/*                             values[key].push($(this).val());*/
/*                         }*/
/*                     } else if (key.indexOf('[') !== -1) {*/
/*                         var parts = key.split(/[[\]]{1,2}/);*/
/*                         parts.length--;*/
/*                         var length = parts.length;*/
/* */
/*                         var value = {};*/
/*                         var tempValue = {};*/
/*                         for (var index = length-1; index > 0; index--) {*/
/*                             if (index == length-1) {*/
/*                                 value[parts[index]] = $(this).val();*/
/*                             } else {*/
/*                                 tempValue = value;*/
/*                                 value = {};*/
/*                                 value[parts[index]] = tempValue;*/
/*                                 tempValue = {};*/
/*                             }*/
/*                         }*/
/* */
/*                         MergeRecursive(value,values[parts[0]]);*/
/* */
/*                         values[parts[0]] = value;*/
/* */
/*                     } else {*/
/*                         if ($(this).hasClass('btn-green-border')) {*/
/*                             if ($(this).hasClass('checkButton')) {*/
/*                                 values[key] = $(this).val();*/
/*                             }*/
/*                         } else {*/
/*                             values[key] = $(this).val();*/
/*                         }*/
/*                     }*/
/*                 });*/
/* */
/* */
/*                 // allow validation*/
/*                 var params = {values: values, isValid: true};*/
/* */
/*                 $(this).trigger('block-data-validate', [params]);*/
/*                 if (!params.isValid) {*/
/*                     console.log('validation error');*/
/*                     return;*/
/*                 }*/
/* */
/*                 return values;*/
/*             };*/
/* */
/*             var  MergeRecursive = function(obj1, obj2) {*/
/* */
/*                 for (var p in obj2) {*/
/*                     try {*/
/*                         // Property in destination object set; update its value.*/
/*                         if ( obj2[p].constructor==Object ) {*/
/*                             obj1[p] = MergeRecursive(obj1[p], obj2[p]);*/
/* */
/*                         } else {*/
/*                             obj1[p] = obj2[p];*/
/* */
/*                         }*/
/* */
/*                     } catch(e) {*/
/*                         // Property in destination object not set; create it and set its value.*/
/*                         obj1[p] = obj2[p];*/
/* */
/*                     }*/
/*                 }*/
/* */
/*                 return obj1;*/
/*             };*/
/* */
/*             var saveBlock = function(e, block) {*/
/*                 var controller = $(block).data('controller');*/
/*                 if (!controller) {*/
/*                     console.log('no controller defined');*/
/*                     return;*/
/*                 }*/
/*                 var action = $(block).data('action');*/
/*                 if (!action) {*/
/*                     console.log('no action defined');*/
/*                     return;*/
/*                 }*/
/* */
/*                 var values = getFormDataByBlock(block);*/
/* */
/*                 var ajaxUrl = "{{ app.request.getBaseURL() }}/ajax/" + controller + "/" + action;*/
/*                 var routList = "{{ admin.generateUrl('list') }}";*/
/* */
/*                 console.log('sending ajax to ' + ajaxUrl);*/
/*                 var result = [];*/
/*                 result.success = false;*/
/*                 $.ajax(ajaxUrl, {*/
/*                     'data': values,*/
/*                     'type': 'POST',*/
/*                     'success': function (response) {*/
/*                         result.success = true;*/
/*                         console.log('ajax success');*/
/* */
/*                         if (response.redirect) {*/
/*                             window.location.href = routList;*/
/*                         } else {*/
/*                             eachArticle();*/
/*                         }*/
/*                         $(block).find('input[type="text"]').val('');*/
/*                         $(block).find('textarea').val('');*/
/*                         $('div[id ^= "ui-id-"]').dialog("close");*/
/*                         $(block).data().plugin_loading.hide();*/
/* */
/*                     },*/
/*                     'error': function (error) {*/
/*                         result.success = false;*/
/*                         console.log('ajax error');*/
/*                         console.log(error);*/
/*                         $(block).data().plugin_loading.hide();*/
/*                     }*/
/*                 });*/
/* */
/*                 return result;*/
/*             };*/
/* */
/*             $('.show-page').on('click', '.btn-all-save', function(e){*/
/*                 var params = {};*/
/*                 params['saveDetails'] = contactDetailsHandler._getForm();*/
/*                 $(".display-block-persistent:not(.email-form)").each(function (e) {*/
/*                     var name = $(this).data('action');*/
/* */
/*                     if (params[name]) {*/
/*                         params[name] = $.extend(params[name], getFormDataByBlock(this));*/
/*                     } else {*/
/*                         params[name] = getFormDataByBlock(this);*/
/*                     }*/
/*                 });*/
/* */
/*                 var value = {'forms': params};*/
/*                 var ajaxUrl = "{{ app.request.getBaseURL() }}/ajax/leads_display/saveAllDataLead";*/
/*                 {#var routList = "{{ admin.generateUrl('list') }}";#}*/
/* */
/*                 $.ajax(ajaxUrl, {*/
/*                     'data': value,*/
/*                     'type': 'POST',*/
/*                     'success': function (response) {*/
/*                         console.log('ajax success');*/
/*                         window.location.replace("{{ admin.generateObjectUrl('show', object) }}");*/
/*                     },*/
/*                     'error': function (error) {*/
/*                         console.log('ajax error');*/
/*                         console.log(error);*/
/*                     }*/
/*                 });*/
/* */
/*                 e.preventDefault();*/
/* */
/*             });*/
/* */
/*             $('.make-call').on('click', function() {*/
/*                 $('input[name=contact_status][value=1]').attr('checked', true);*/
/*                 $('select[name=contact_type]').val(1);*/
/*                 $('select[name=contact_result]').val(6);*/
/*             });*/
/* */
/*             $('.send-email').on('click', function() {*/
/*                 $('input[name=contact_status][value=1]').attr('checked', true);*/
/*                 $('select[name=contact_type]').val(4);*/
/*                 $('select[name=contact_result]').val(6);*/
/*             });*/
/*         };*/
/*         $(function() {*/
/*             _init($)*/
/*         });*/
/*     })(window.jQuery);*/
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
/*             $('body').on('reset', 'form', function(){*/
/*                 self.calculate();*/
/*             });*/
/*         },*/
/* */
/*         calculate: function(){*/
/*             var count = 0;*/
/*             this.block.find('.criteria-input:checked').each(function(){*/
/*                 count += parseFloat($(this).data('criteria-value'));*/
/*             });*/
/*             var humanCount = parseFloat(Math.floor(count * 100 * 10000) / 10000);*/
/* */
/*             this.block.find('.criteria-score').val(humanCount);*/
/*             $('.lead-score').text(Math.round(humanCount) + '%');*/
/*         }*/
/* */
/* */
/* */
/*     };*/
/* */
/*     var ContactDetailsHandler = function(){*/
/*         var textBlock, formBlock, editButton, saveButton, copyFromLeadButton, cancelButton, chooseButton, wrap, contactCardField;*/
/*     };*/
/* */
/*     ContactDetailsHandler.prototype = {*/
/*         init: function(){*/
/*             this.textBlock = $('.entity-details-table-text');*/
/*             this.formBlock = $('.entity-details-table-form');*/
/*             this.editButton = $('.entity-details-edit');*/
/*             this.cancelButton = $('.entity-details-edit-cancel');*/
/*             this.chooseButton = $('.entity-details-choose-contact');*/
/*             this.saveButton = $('.entity-details-save');*/
/*             this.copyFromLeadButton = $('.inline-edit-copy-from-lead');*/
/*             this.wrap = $('div.entity-details-wrap');*/
/*             this.contactCardField = $('.contactCardEntryPoint');*/
/*             this._attachHandlers();*/
/* */
/*             this._hideDouble();*/
/*         },*/
/* */
/*         _hideDouble: function(){*/
/*             if(this._getCurrentForm().find('.entity-details-table-text').length){*/
/*                 this._showText();*/
/*             } else {*/
/*                 this._showForm();*/
/*             }*/
/*         },*/
/* */
/*         _getCurrentForm: function(){*/
/*             return $('.entity-details .tab-content .tab-pane.active');*/
/*         },*/
/* */
/*         _getLeadForm: function(){*/
/*             return $('.entity-details .tab-content .tab-pane.pane-lead-details');*/
/*         },*/
/* */
/*         _attachHandlers: function(){*/
/*             var self = this;*/
/*             $(this.editButton).on('click',  function(e){*/
/*                 self._showForm();*/
/*                 e.preventDefault();*/
/*             });*/
/* */
/*             $(this.saveButton).on('click',  function(e){*/
/* */
/*                 self._saveBlock();*/
/*                 self._showText();*/
/*                 e.preventDefault();*/
/*             });*/
/* */
/*             $(this.cancelButton).on('click', function(e){*/
/*                 self._showText();*/
/*                 e.preventDefault();*/
/*             });*/
/* */
/*             $(this.copyFromLeadButton).on('click', function(e){*/
/*                 var values = {};*/
/*                 values['copyFromLead'] = 'true';*/
/*                 var block = self._getLeadForm();*/
/*                 self._saveBlock(values, block);*/
/*                 self._showText();*/
/*                 e.preventDefault();*/
/*             });*/
/* */
/*             $(this.contactCardField).on('change', function(e){*/
/*                 var values = {};*/
/*                 values['selectedCard'] = $(this).val();*/
/*                 self._saveBlock(values);*/
/*             });*/
/* */
/*             if($('#for_choose_id').length) {*/
/*                 var chooseSpinner = Spinner("for_choose_id");*/
/*                 chooseSpinner.create({});*/
/*                 chooseSpinner.hide();*/
/*                 $('#'+$('.modal')[1].id).on('hidden.bs.modal', function () {*/
/*                     chooseSpinner.hide();*/
/*                 })*/
/*             }*/
/*             $(this.chooseButton).on('click', function(e){*/
/*                 if (chooseSpinner) {*/
/*                     chooseSpinner.init();*/
/*                     chooseSpinner.show();*/
/*                 }*/
/*                 $(self.contactCardField).parents('.field-container')*/
/*                         .find('.field-actions a[title="List"]').trigger('click');*/
/*                 e.preventDefault();*/
/*             });*/
/* */
/*             $('.block-tabs a[data-toggle="tab"]').on('shown.bs.tab', function (e) {*/
/* */
/* */
/*                self._hideDouble();*/
/* */
/* */
/*             });*/
/* */
/* */
/*         },*/
/* */
/*         _showForm: function(){*/
/*             $(this.copyFromLeadButton).hide();*/
/*             $(this.textBlock).hide();*/
/*             $(this.formBlock).show();*/
/*             $(this.editButton).hide();*/
/*             $(this.cancelButton).show();*/
/*             $(this.saveButton).show();*/
/*             if(this._getCurrentForm().hasClass('pane-opportunity-details')){*/
/*                 $(this.copyFromLeadButton).show();*/
/*             }*/
/*         },*/
/* */
/*         _showText: function(){*/
/*             $(this.copyFromLeadButton).hide();*/
/*             $(this.textBlock).show();*/
/*             $(this.formBlock).hide();*/
/*             $(this.editButton).show();*/
/*             $(this.cancelButton).hide();*/
/*             $(this.saveButton).hide();*/
/*         },*/
/* */
/*         _getForm: function(defaultValues, block) {*/
/*             var values = defaultValues || {};*/
/* */
/*             var form = block || this._getCurrentForm();*/
/* */
/*             form.find('input, select, textarea').each(function () {*/
/*                 var key = $(this).attr('name');*/
/*                 if (!key) {*/
/*                     key = $(this).attr('id');*/
/*                 }*/
/*                 if (!key) {*/
/*                     return;*/
/*                 }*/
/*                 if (this.getAttribute('type') == 'radio') {*/
/*                     if (this.hasAttribute('checked')) {*/
/*                         values[key] = $(this).val();*/
/*                     }*/
/*                 } else if (key.indexOf('[]') !== false && this.getAttribute('type') == 'checkbox') {*/
/* */
/*                     if (!values[key]) {*/
/*                         values[key] = [];*/
/*                     }*/
/* */
/*                     if ($(this).prop('checked')) {*/
/* */
/*                         values[key].push($(this).val());*/
/*                     }*/
/*                 } else {*/
/*                     if ($(this).hasClass('btn-green-border')) {*/
/*                         if ($(this).hasClass('checkButton')) {*/
/*                             values[key] = $(this).val();*/
/*                         }*/
/*                     } else {*/
/*                         values[key] = $(this).val();*/
/*                     }*/
/*                 }*/
/*             });*/
/* */
/*             return values;*/
/*         },*/
/* */
/*         _saveBlock: function(defaultValues, block){*/
/* */
/*             var values = this._getForm(defaultValues, block);*/
/* //            $([this.editButton, this.cancelButton, this.copyFromLeadButton, this.saveButton]).hide();*/
/* //            var defaultValues = {  };*/
/* //            var options = { validate: true, name: "bar" };*/
/* //*/
/* //            /* merge defaults and options, without modifying defaults *//* */
/* //            var val = $.extend({}, defaults, options);*/
/* */
/* */
/*             var url = "{{ app.request.getBaseURL() }}/ajax/leads_display/saveDetails";*/
/*             var self = this;*/
/*             $.ajax(url, {*/
/*                 'data': values,*/
/*                 'type': 'POST',*/
/*                 'dataType':'json',*/
/*                 'success': function (response) {*/
/*                     if(response.content){*/
/*                         $(self.wrap).html(response.content);*/
/*                         window.gapi_init();*/
/*                         self.init();*/
/*                     }else{*/
/*                         //window.alert(response.message);*/
/*                         console.log(response);*/
/*                     }*/
/*                 },*/
/*                 'error': function (error) {*/
/*                     console.log('ajax error');*/
/*                     console.log(error);*/
/*                     //alert('A error occured while AJAX request.');*/
/*                 }*/
/*             });*/
/*         }*/
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
/*                     //alert(e);*/
/*                     console.log(e);*/
/*                 }*/
/*             }*/
/*         )*/
/* */
/*         return false;*/
/* */
/*     }*/
/* </script>*/
/* */