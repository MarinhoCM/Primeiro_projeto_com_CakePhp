<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Descontos Controller
 *
 * @property \App\Model\Table\DescontosTable $Descontos
 * @method \App\Model\Entity\Desconto[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DescontosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $descontos = $this->paginate($this->Descontos);

        $this->set(compact('descontos'));
    }

    /**
     * View method
     *
     * @param string|null $id Desconto id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $desconto = $this->Descontos->get($id, [
            'contain' => ['Relatorios'],
        ]);

        $this->set(compact('desconto'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $desconto = $this->Descontos->newEmptyEntity();
        if ($this->request->is('post')) {
            $desconto = $this->Descontos->patchEntity($desconto, $this->request->getData());
            if ($this->Descontos->save($desconto)) {
                $this->Flash->success(__('The desconto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The desconto could not be saved. Please, try again.'));
        }
        $this->set(compact('desconto'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Desconto id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $desconto = $this->Descontos->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $desconto = $this->Descontos->patchEntity($desconto, $this->request->getData());
            if ($this->Descontos->save($desconto)) {
                $this->Flash->success(__('The desconto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The desconto could not be saved. Please, try again.'));
        }
        $this->set(compact('desconto'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Desconto id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $desconto = $this->Descontos->get($id);
        if ($this->Descontos->delete($desconto)) {
            $this->Flash->success(__('The desconto has been deleted.'));
        } else {
            $this->Flash->error(__('The desconto could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
