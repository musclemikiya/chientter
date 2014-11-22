<?php
class Line extends Eloquent {
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 't_lines';

    /**
     * 
     */
    public function getLines() {
        var_dump($this->all());
    }
}