<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Articles Controller
 *
 * @property \App\Model\Table\ArticlesTable $Articles
 *
 * @method \App\Model\Entity\Article[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ArticlesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function searchAll(){

        // Set Out Format View
        $this->viewBuilder()->className('Json');

        // Get data
        $articles = $this->Articles->find('latest');

        // Set Data View
        $this->set(compact('videos'));
        $this->set('_serialize', ['videos']);

        // Set Force Download
        // Prior to 3.4.0
        // $this->response->download('report-' . date('YmdHis') . '.' . $format);
        return $this->response->withDownload('report-' . date('YmdHis') . '.' .'Json');
    }



}
