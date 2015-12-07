<?php
/*plugin dashboard*/
function admin_init() {
    register_setting('fcc_dashboard_options', 'fcc_dashboard_options', 'validate');
}

function add_page() {
    add_menu_page('Fcc Dashboard Options', 'Fcc Dashboard Options', 'manage_options', 'fcc_dashboard_options', 'options_page');
}

function options_page() {
    $options = get_option('fcc-option');
    ?>
    <div class="wrap">
        <h2>FCC Dashboard Options</h2>
        <script>
            window.onload = function() {
                var fileInput = document.getElementById('fileInput');
                var fileDisplayArea = document.getElementById('fileDisplayArea');

                fileInput.addEventListener('change', function(e) {
                    var file = fileInput.files[0];
                    var textType = /text.*/;

                    if (file.type.match(textType)) {
                        var reader = new FileReader();
                        console.log(reader);

                        reader.onload = function(e) {
                            fileDisplayArea.innerText = reader.result;
                        }
                        reader.readAsText(file);    
                    } else {
                        fileDisplayArea.innerText = "File not supported!"
                    }
                });
            }
        </script>

        <div id="page-wrapper">
            <div>
                Select a text file: 
                <input type="file" id="fileInput">
            </div>
            <pre id="fileDisplayArea"><pre>
        </div>
    </div>
    <?php
}