<?php
namespace controllers;

class NewsController extends Controller {

    public function index($id) {
        // TODO: Fetch the news by its id from the database

        // TODO: Fetch the author (profile) from its author_id saved in the news

        $news = [
            "id" => $id,
            'title' => 'Le télétravail',
            'message' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium autem consequuntur excepturi expedita nam repellat. At aut distinctio, eligendi illo ipsam natus necessitatibus nulla odio placeat, quas, recusandae repellendus voluptatem? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium autem consequuntur excepturi expedita nam repellat. At aut distinctio, eligendi illo ipsam natus necessitatibus nulla odio placeat, quas, recusandae repellendus voluptatem? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium autem consequuntur excepturi expedita nam repellat. At aut distinctio, eligendi illo ipsam natus necessitatibus nulla odio placeat, quas, recusandae repellendus voluptatem? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium autem consequuntur excepturi expedita nam repellat. At aut distinctio, eligendi illo ipsam natus necessitatibus nulla odio placeat, quas, recusandae repellendus voluptatem? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium autem consequuntur excepturi expedita nam repellat. At aut distinctio, eligendi illo ipsam natus necessitatibus nulla odio placeat, quas, recusandae repellendus voluptatem? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium autem consequuntur excepturi expedita nam repellat. At aut distinctio, eligendi illo ipsam natus necessitatibus nulla odio placeat, quas, recusandae repellendus voluptatem? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium autem consequuntur excepturi expedita nam repellat. At aut distinctio, eligendi illo ipsam natus necessitatibus nulla odio placeat, quas, recusandae repellendus voluptatem? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium autem consequuntur excepturi expedita nam repellat. At aut distinctio, eligendi illo ipsam natus necessitatibus nulla odio placeat, quas, recusandae repellendus voluptatem? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium autem consequuntur excepturi expedita nam repellat. At aut distinctio, eligendi illo ipsam natus necessitatibus nulla odio placeat, quas, recusandae repellendus voluptatem? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium autem consequuntur excepturi expedita nam repellat. At aut distinctio, eligendi illo ipsam natus necessitatibus nulla odio placeat, quas, recusandae repellendus voluptatem? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium autem consequuntur excepturi expedita nam repellat. At aut distinctio, eligendi illo ipsam natus necessitatibus nulla odio placeat, quas, recusandae repellendus voluptatem?',
            'author' => 'Simon Bolduc',
            'created_at' => date('d M Y à H:m', time())
        ];

        return $this->view('news');
    }

}
