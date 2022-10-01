<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Subcontractors Controller
 *
 * @property \App\Model\Table\SubcontractorsTable $Subcontractors
 * @method \App\Model\Entity\Subcontractor[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SubcontractorsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $subcontractors = $this->paginate($this->Subcontractors);

        $this->set(compact('subcontractors'));
    }

    /**
     * View method
     *
     * @param string|null $id Subcontractor id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $subcontractor = $this->Subcontractors->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('subcontractor'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $subcontractor = $this->Subcontractors->newEmptyEntity();
        if ($this->request->is('post')) {
            $subcontractor = $this->Subcontractors->patchEntity($subcontractor, $this->request->getData());
            if ($this->Subcontractors->save($subcontractor)) {
                $this->Flash->success(__('The subcontractor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The subcontractor could not be saved. Please, try again.'));
        }
        $this->set(compact('subcontractor'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Subcontractor id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $subcontractor = $this->Subcontractors->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $subcontractor = $this->Subcontractors->patchEntity($subcontractor, $this->request->getData());
            if ($this->Subcontractors->save($subcontractor)) {
                $this->Flash->success(__('The subcontractor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The subcontractor could not be saved. Please, try again.'));
        }
        $this->set(compact('subcontractor'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Subcontractor id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $subcontractor = $this->Subcontractors->get($id);
        if ($this->Subcontractors->delete($subcontractor)) {
            $this->Flash->success(__('The subcontractor has been deleted.'));
        } else {
            $this->Flash->error(__('The subcontractor could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
