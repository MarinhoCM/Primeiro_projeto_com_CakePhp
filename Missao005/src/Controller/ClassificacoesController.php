<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Classificacoes Controller
 *
 * @property \App\Model\Table\ClassificacoesTable $Classificacoes
 * @method \App\Model\Entity\Classificaco[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ClassificacoesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $classificacoes = $this->paginate($this->Classificacoes);

        $this->set(compact('classificacoes'));
    }

    /**
     * View method
     *
     * @param string|null $id Classificaco id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $classificaco = $this->Classificacoes->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('classificaco'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $classificaco = $this->Classificacoes->newEmptyEntity();
        if ($this->request->is('post')) {
            $classificaco = $this->Classificacoes->patchEntity($classificaco, $this->request->getData());
            if ($this->Classificacoes->save($classificaco)) {
                $this->Flash->success(__('The classificaco has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The classificaco could not be saved. Please, try again.'));
        }
        $this->set(compact('classificaco'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Classificaco id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $classificaco = $this->Classificacoes->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $classificaco = $this->Classificacoes->patchEntity($classificaco, $this->request->getData());
            if ($this->Classificacoes->save($classificaco)) {
                $this->Flash->success(__('The classificaco has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The classificaco could not be saved. Please, try again.'));
        }
        $this->set(compact('classificaco'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Classificaco id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $classificaco = $this->Classificacoes->get($id);
        if ($this->Classificacoes->delete($classificaco)) {
            $this->Flash->success(__('The classificaco has been deleted.'));
        } else {
            $this->Flash->error(__('The classificaco could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
