<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Requests\CreateClassificacaoRequest;
use App\Http\Requests\UpdateClassificacaoRequest;
use App\Repositories\ClassificacaoRepository;
use App\Http\Controllers\AppBaseController as InfyOmBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use App\Models\Classificacao;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ClassificacaoController extends InfyOmBaseController
{
    /** @var  ClassificacaoRepository */
    private $classificacaoRepository;

    public function __construct(ClassificacaoRepository $classificacaoRepo)
    {
        $this->classificacaoRepository = $classificacaoRepo;
    }

    /**
     * Display a listing of the Classificacao.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {

        $this->classificacaoRepository->pushCriteria(new RequestCriteria($request));
        $classificacao = $this->classificacaoRepository->all();
        return view('admin.classificacao.index')
            ->with('classificacao', $classificacao);
    }

    /**
     * Show the form for creating a new Classificacao.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.classificacao.create');
    }

    /**
     * Store a newly created Classificacao in storage.
     *
     * @param CreateClassificacaoRequest $request
     *
     * @return Response
     */
    public function store(CreateClassificacaoRequest $request)
    {
        $input = $request->all();

        $classificacao = $this->classificacaoRepository->create($input);

        Flash::success('Classificacao saved successfully.');

        return redirect(route('admin.classificacao.index'));
    }

    /**
     * Display the specified Classificacao.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $classificacao = $this->classificacaoRepository->findWithoutFail($id);

        if (empty($classificacao)) {
            Flash::error('Classificacao not found');

            return redirect(route('classificacao.index'));
        }

        return view('admin.classificacao.show')->with('classificacao', $classificacao);
    }

    /**
     * Show the form for editing the specified Classificacao.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $classificacao = $this->classificacaoRepository->findWithoutFail($id);

        if (empty($classificacao)) {
            Flash::error('Classificacao not found');

            return redirect(route('classificacao.index'));
        }

        return view('admin.classificacao.edit')->with('classificacao', $classificacao);
    }

    /**
     * Update the specified Classificacao in storage.
     *
     * @param  int              $id
     * @param UpdateClassificacaoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateClassificacaoRequest $request)
    {
        $classificacao = $this->classificacaoRepository->findWithoutFail($id);



        if (empty($classificacao)) {
            Flash::error('Classificacao not found');

            return redirect(route('classificacao.index'));
        }

        $classificacao = $this->classificacaoRepository->update($request->all(), $id);

        Flash::success('Classificacao updated successfully.');

        return redirect(route('admin.classificacao.index'));
    }

    /**
     * Remove the specified Classificacao from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
      public function getModalDelete($id = null)
      {
          $error = '';
          $model = '';
          $confirm_route =  route('admin.classificacao.delete',['id'=>$id]);
          return View('admin.layouts/modal_confirmation', compact('error','model', 'confirm_route'));

      }

       public function getDelete($id = null)
       {
           $sample = Classificacao::destroy($id);

           // Redirect to the group management page
           return redirect(route('admin.classificacao.index'))->with('success', Lang::get('message.success.delete'));

       }

}
