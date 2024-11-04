<?php
    $arrMonths = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 
    'September', 'October', 'November', 'December' );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"/>
    <title>Form Automation</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <select name="drpMonths" class="form-control">
                    <?php
                        if (isset($arrMonths)) {
                            foreach ($arrMonths as $key => $value) {
                                if ($value == date('F'))
                                    echo '<option value="' . $value . '" selected>' . $value . '</option>';
                                else
                                    echo '<option value="' . $value . '" >' . $value . '</option>';
                            }
                        }
                    ?>
                </select>

                <select name="drpDays" class="form-control">
                    <?php
                        for ($i=1; $i < 32; $i++)
                            if ($i == date('d'))
                                echo '<option value="' . $i . '" selected>' . $i . '</option>';
                            else
                                echo '<option value="' . $i . '">' . $i . '</option>';
                    ?>      
                </select>

                <select name="drpYear" class="form-control">
                    <?php
                        $yearNow = date('Y');
                        $oneHundredYear = $yearNow - 100;
                        $tenYears = $yearNow - 10;
                        for ($i = $yearNow; $i > $oneHundredYear; $i--) {
                            if ($i == $tenYears) 
                                echo '<option value="' . $i . '" selected>' . $i . '</option>';
                            else
                                echo '<option value="' . $i . '">' . $i . '</option>';

                        }
                    ?>
                </select>
                
                <button type="submit" class="btn btn-primary">Process</button>
            </div>
        </div>
    </div>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>