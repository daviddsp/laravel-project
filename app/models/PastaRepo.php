<?php
/**
 * Created by PhpStorm.
 * User: asolorzano
 * Date: 19/01/15
 * Time: 11:52 PM
 */
// app/models/PastaRepo

class PastaRepo implements PastaRepoInterface {

    public function cookSpaguetti()
    {
        return Pasta::where('type', '=', 'spaguetti')->get();
   }

    public function cookRigatoni()
    {
        return Pasta::where('type', '=', 'rigatoni')->get();
   }

// Etc. Etc...

}