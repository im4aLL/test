<?php

namespace App\Controller;

use App\Helper\Helper;
use App\Model\Task;

class TaskController extends Controller
{

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
     * @param null $errors
     */
    public function create($errors = null)
    {
        $this->f3->set('errors', $errors);

        echo \Template::instance()->render('views/Tasks-form.html');
        return;
    }

    /**
     * Store a task
     */
    public function store()
    {
        $errors = [];

        if(!$this->f3->exists('POST.name') || $this->f3->get('POST.name') == null) {
            $errors['name'] = 'You need to enter task name';
        }

        if(!$this->f3->exists('POST.description') || $this->f3->get('POST.description') == null) {
            $errors['description'] = 'Please enter task description';
        }

        if(count($errors) > 0) {
            return $this->create($errors);
        }

        $task = new Task($this->f3);
        $task->save([
            'name' => $this->f3->get('POST.name'),
            'description' => $this->f3->get('POST.description'),
        ]);

        $this->f3->reroute('/tasks');
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

        echo \Template::instance()->render('views/Task-form.html');
        return;
    }
}