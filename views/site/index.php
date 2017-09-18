<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

<!--    <div class="jumbotron">-->
<!--        <h1>Congratulations!</h1>-->
<!---->
<!--        <p class="lead">You have successfully created your Yii-powered application.</p>-->
<!---->
<!--        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>-->
<!--    </div>-->

    <div class="body-content" style="margin-top: 4%">

        <div class="row">

            <div class="col-lg-6 diag">
                <h2>BTC-LTC Rate</h2>
                <table align="center">
                    <tr>
                        <th class="rate-table-header">Bid</th>
                        <th class="rate-table-header">Ask</th>
                        <th class="rate-table-header">Last</th>
                    </tr>
                    <?php
                    foreach ($cRate as $coRate)
                        echo '<tr>';
                        echo '<td class="rate-table-data">' . $coRate['Bid'] . '</td>';
                        echo '<td class="rate-table-data">' . $coRate['Ask'] . '</td>';
                        echo '<td class="rate-table-data">' . $coRate['Last'] . '</td>';
                        echo '</tr>';
                    ?>
                </table>
            </div>

            <div class="col-lg-6 diag">
                <h2>Heading 2</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 diag">
                <h2>Heading 1</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.
                </p>
            </div>
            <div class="col-lg-6 diag">
                <h2>Heading 2</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.
                </p>
            </div>
        </div>
    </div>
</div>
