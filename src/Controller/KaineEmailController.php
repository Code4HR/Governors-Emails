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

	public function initialize()
	{
		parent::initialize();
		$this->loadComponent('Recaptcha.Recaptcha');
	}
	
	private function verify_recaptcha()
	{
		if ($this->request->is('post')) {
			if ($this->Recaptcha->verify()) {
				// Here you can validate your data
				if (!empty($this->request->data)) {
					$this->Flash->success(__('Email addresses will now be displayed.'));
					$session = $this->request->session();
					$session->write('Recaptcha.complete', true);
					
				} else {
					$this->Flash->error(__('There was a problem validating your Recaptcha.  Please try again.'));
				}
			} else {
				// You can debug developers errors with
				// debug($this->Recaptcha->errors());
				$this->Flash->error(__('Please check your Recaptcha Box.'));
			}
		}
	}

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
		$session = $this->request->session();

		$this->verify_recaptcha();
		
		$query = $this->KaineEmail->find('search', ['search' => $this->request->query]);

		$this->set('kaineEmail', $this->paginate($query));
		$this->set('RecaptchaComplete', $session->read('Recaptcha.complete'));
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
		$session = $this->request->session();
		
		$this->verify_recaptcha();

        $kaineEmail = $this->KaineEmail->get($id, [
            'contain' => []
        ]);

        $this->set('kaineEmail', $kaineEmail);
        $this->set('_serialize', ['kaineEmail']);
		$this->set('RecaptchaComplete', $session->read('Recaptcha.complete'));

    }
	
	public function search() {
	}

   
}
