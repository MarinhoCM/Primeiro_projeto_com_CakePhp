<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Relatorios Controller
 *
 * @property \App\Model\Table\RelatoriosTable $Relatorios
 * @method \App\Model\Entity\Relatorio[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RelatoriosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Vendedores', 'Vendas'],
        ];
        $relatorios = $this->paginate($this->Relatorios);

        $this->set(compact('relatorios'));
    }

    /**
     * View method
     *
     * @param string|null $id Relatorio id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $relatorio = $this->Relatorios->get($id, [
            'contain' => ['Vendedores', 'Vendas'],
        ]);

        $this->set(compact('relatorio'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $relatorio = $this->Relatorios->newEmptyEntity();
        if ($this->request->is('post')) {
            $relatorio = $this->Relatorios->patchEntity($relatorio, $this->request->getData());
            if ($this->Relatorios->save($relatorio)) {
                $this->Flash->success(__('The relatorio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The relatorio could not be saved. Please, try again.'));
        }
        $vendedores = $this->Relatorios->Vendedores->find('list', ['limit' => 200])->all();
        $this->set(compact('relatorio', 'vendedores'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Relatorio id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $relatorio = $this->Relatorios->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $relatorio = $this->Relatorios->patchEntity($relatorio, $this->request->getData());
            if ($this->Relatorios->save($relatorio)) {
                $this->Flash->success(__('The relatorio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The relatorio could not be saved. Please, try again.'));
        }
        $vendedores = $this->Relatorios->Vendedores->find('list', ['limit' => 200])->all();
        
        $this->set(compact('relatorio', 'vendedores'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Relatorio id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $relatorio = $this->Relatorios->get($id);
        if ($this->Relatorios->delete($relatorio)) {
            $this->Flash->success(__('The relatorio has been deleted.'));
        } else {
            $this->Flash->error(__('The relatorio could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
