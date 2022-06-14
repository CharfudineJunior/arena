
        $(document).ready(function () {

            $(".next").click(function (opcao2) {
                var current_index = $(this).parent().index("fieldset");

                if (validateStep(current_index)) {
                    makeStepActive(current_index + 1);
                } else {
                    opcao2.preventDefault();
                }
            });

            $(".previous").click(function () {
                var current_index = $(this).parent().index("fieldset");
                makeStepActive(current_index - 1);
            });

            makeStepActive(0);

        });

        function makeStepActive(index) {
            var step = $("#progressbar p:eq(" + index + ")");
            var feildset = $("fieldset:eq(" + index + ")");
            if (step.length) {
                $("#progressbar p").hide();
                $("fieldset").hide();
                step.show();
                feildset.slideDown(500);
            }
        }

        function validateStep(step) {
            switch (step) {
                case 0:
                    if (($("input[name='opcao']:checked").length === 0)) {
                        document.getElementById("1").innerHTML
                            = "Selecione uma opção!";
                        return false;
                    }
                    return true;
                    break;
                case 1:
                    if (($("input[name='opcao2']:checked").length === 0)) {
                        document.getElementById("2").innerHTML
                            = "Selecione uma opção!";
                        return false;
                    }
                    return true;
                    break;
                case 2:
                    if (($("input[name='opcao3']:checked").length === 0)) {
                        document.getElementById("3").innerHTML
                            = "Selecione uma opção!";
                        return false;
                    }
                    return true;
                    break;
                case 3:
                    if (($("input[name='opcao4']:checked").length === 0)) {
                        document.getElementById("4").innerHTML
                            = "Selecione uma opção!";
                        return false;
                    }
                    return true;
                    break;
                default:
                    var ids = ['location', 'date', 'name', 'email', 'phone'];
                    var err = [];
                    ids.forEach(function (id, i) {
                        var value = $("#" + id).val();
                        if ($.trim(value).length === 0) {
                            document.getElementById(id).style.borderColor = "#E34234";
                            err.push('Please Enter Your ' + id);
                        }
                    });

                    if (err.length > 0) {
                        $('.fs-error').html('<span style="color:red;">' + err.join('!<br>') + '</span>');
                        $('.fs-error').show();
                        return false;
                    } else {
                        return true;
                    }
            }
        }