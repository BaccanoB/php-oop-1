<?php 

    class Movie {

        // attributi

        public $poster;
        public $title;
        public $original_title;
        public $director;
        public $actors;
        public $date;
        public $plot;

        // costuttore

        function __construct($poster,$title,$original_title,$director,$plot, $actors = []){
            $this->poster = $poster;
            $this->title = $title;
            $this->original_title = $original_title;
            $this->director = $director;
            $this->actors = $actors;
            $this->plot = $plot;
            $this->date = date("d-m-Y");

        }

        // metodi

        public function getOriginalTitle() {
            return $this->original_title;
        }

        public function getPlot($character) {
            return substr($this->plot,0,$character)."...";
        }

    }

    $plot = "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?";

    

    