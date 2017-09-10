<?php

namespace App\Controller;

use App\Helper\Helper;
use App\Model\Task;

class TaskController extends Controller
{

    /**
     * Form errors
     *
     * @var array
     */
    protected $errors = [];

    /**
     * Get all tasks
     */
    public function index()
    {
        $task = new Task($this->f3);
        $this->f3->set('tasks', $task->all());
        $this->f3->set('Helper', Helper::class);

        echo \Template::instance()->render('views/Tasks.html');
        return;
    }

    /**
     * Create a task view
     */
    public function create()
    {
        $this->f3->set('errors', $this->errors);

        echo \Template::instance()->render('views/Task-form.html');
        return;
    }

    /**
     * Store a task
     */
    public function store()
    {
        if($this->isFormInvalid()) {
            return $this->create($this->errors);
        }

        $task = new Task($this->f3);
        $task->add([
            'name' => $this->f3->get('POST.name'),
            'description' => $this->f3->get('POST.description'),
        ]);

        $this->f3->reroute('@tasks');
        return;
    }

    /**
     * Show a single task
     *
     * @param $f3
     * @param $params
     */
    public function show($f3, $params)
    {
        $task = new Task($this->f3);
        $this->f3->set('task', $task->get($params['task']));
        $this->f3->set('Helper', Helper::class);

        echo \Template::instance()->render('views/Task.html');
        return;
    }

    /**
     * Edit a single task
     *
     * @param $f3
     * @param $params
     */
    public function edit($f3, $params)
    {
        $task = new Task($this->f3);
        $this->f3->set('task', $task->get($params['task']));
        $this->f3->set('Helper', Helper::class);
        $this->f3->set('errors', $this->errors);

        echo \Template::instance()->render('views/Task-form.html');
        return;
    }

    /**
     * Update a single task
     *
     * @param $f3
     * @param $params
     */
    public function update($f3, $params)
    {
        if($this->isFormInvalid()) {
            return $this->edit($f3, $params);
        }

        $task = new Task($this->f3);
        $task->update([
            'name' => $this->f3->get('POST.name'),
            'description' => $this->f3->get('POST.description'),
        ], ['id' => $params['task']]);

        $this->f3->reroute('@task.show(@task='.$params['task'].')');
        return;
    }

    /**
     * Delete a task
     *
     * @param $f3
     * @param $params
     */
    public function destroy($f3, $params)
    {
        $task = new Task($this->f3);
        $task->delete(['id' => $params['task']]);

        $this->f3->reroute('@tasks');
        return;
    }

    /**
     * Form validate checker
     *
     * @return bool
     */
    protected function isFormInvalid()
    {
        $this->errors = [];

        if(!$this->f3->exists('POST.name') || $this->f3->get('POST.name') == null) {
            $this->errors['name'] = 'You need to enter task name';
        }

        if(!$this->f3->exists('POST.description') || $this->f3->get('POST.description') == null) {
            $this->errors['description'] = 'Please enter task description';
        }

        return count($this->errors) > 0;
    }
}