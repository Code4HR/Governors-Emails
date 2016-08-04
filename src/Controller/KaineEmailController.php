<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * KaineEmail Controller
 *
 * @property \App\Model\Table\KaineEmailTable $KaineEmail
 */
class KaineEmailController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $kaineEmail = $this->paginate($this->KaineEmail);

        $this->set(compact('kaineEmail'));
        $this->set('_serialize', ['kaineEmail']);
    }

    /**
     * View method
     *
     * @param string|null $id Kaine Email id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $kaineEmail = $this->KaineEmail->get($id, [
            'contain' => []
        ]);

        $this->set('kaineEmail', $kaineEmail);
        $this->set('_serialize', ['kaineEmail']);
    }

   
}
