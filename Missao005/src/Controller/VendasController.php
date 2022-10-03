<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Vendas Controller
 *
 * @property \App\Model\Table\VendasTable $Vendas
 * @method \App\Model\Entity\Venda[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class VendasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Relatorios', 'Frutas', 'Descontos'],
        ];
        $vendas = $this->paginate($this->Vendas);

        $this->set(compact('vendas'));
    }

    /**
     * View method
     *
     * @param string|null $id Venda id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $venda = $this->Vendas->get($id, [
            'contain' => ['Relatorios', 'Frutas', 'Descontos'],
        ]);

        $this->set(compact('venda'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $venda = $this->Vendas->newEmptyEntity();
        if ($this->request->is('post')) {
            $venda = $this->Vendas->patchEntity($venda, $this->request->getData());
            if ($this->Vendas->save($venda)) {
                $this->Flash->success(__('The venda has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The venda could not be saved. Please, try again.'));
        }
        $relatorios = $this->Vendas->Relatorios->find('list', ['limit' => 200])->all();
        $frutas = $this->Vendas->Frutas->find('list', ['limit' => 200])->all();
        $descontos = $this->Vendas->Descontos->find('list', ['limit' => 200])->all();
        $this->set(compact('venda', 'relatorios', 'frutas', 'descontos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Venda id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $venda = $this->Vendas->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $venda = $this->Vendas->patchEntity($venda, $this->request->getData());
            if ($this->Vendas->save($venda)) {
                $this->Flash->success(__('The venda has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The venda could not be saved. Please, try again.'));
        }
        $relatorios = $this->Vendas->Relatorios->find('list', ['limit' => 200])->all();
        $frutas = $this->Vendas->Frutas->find('list', ['limit' => 200])->all();
        $descontos = $this->Vendas->Descontos->find('list', ['limit' => 200])->all();
        $this->set(compact('venda', 'relatorios', 'frutas', 'descontos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Venda id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $venda = $this->Vendas->get($id);
        if ($this->Vendas->delete($venda)) {
            $this->Flash->success(__('The venda has been deleted.'));
        } else {
            $this->Flash->error(__('The venda could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
