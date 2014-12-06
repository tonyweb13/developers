<?php

/**
 * SiteController is the default controller to handle user requests.
 */
class SiteController extends CController {

    /**
     * Index action is the default action in a controller.
     */
    public function actionIndex() {
        $this->render('index');
    }

    public function actionResult() {

        $entry = $_POST['entry'];

        if ($entry > 100) {
            $entry = 'Note Unavailable Exception';
        } else if ($entry < 10) {
            $entry = 'Invalid Argument Exception';
        } else if ($entry == NULL) {
            $entry = '[ Empty Set ]';
        } else {

            if ($entry == 100) {
                $entry = '[ 100.00, 50.00, 20.00, 10.00 ]';
            } else if ($entry < 100 AND $entry >= 50) {
                $entry = '[ 50.00, 20.00, 10.00 ]';
            } else if ($entry < 50 AND $entry >= 20) {
                $entry = '[ 20.00, 10.00 ]';
            } else if ($entry < 20 AND $entry > 10) {
                $entry = '[ 10.00 ]';
            } else {
                $entry = '[ ' . $_POST['entry'] . '.00 ]';
            }
        }

        $this->render('result', array(
            'output' => $entry,
        ));
    }

}
