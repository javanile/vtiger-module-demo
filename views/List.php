<?php

class Demo_List_View extends Vtiger_List_View
{
    /*
    public function preProcess(Vtiger_Request $request)
    {
        echo "pre";
    }
    */

    public function process(Vtiger_Request $request)
    {
        if (isset($_POST['__protocol']) && $_POST['__protocol'] == 'json-v1') {
            echo "A";
            return;
        }
        parent::process($request);
    }

    public function postProcess(Vtiger_Request $request) {
        ?>
        <script>

          //  var TTT = '<?=csrf_get_tokens()?>';

        $(document).ready(function() {

            $.ajax({
                url: "index.php",
                method: "POST",
                data: {
                    module: "Demo",
                    view: "List",
                    '__protocol': 'json-v1'
            //        '__vtrftk': TTT
                },
                success: function (resp) {
                    console.log (resp);
                }
            });


        });

        </script>


        <?php
        parent::postProcess($request);
    }


}
