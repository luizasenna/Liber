<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Requests\CreatePessoaRequest;
use App\Http\Requests\UpdatePessoaRequest;
use App\Repositories\PessoaRepository;
use App\Http\Controllers\AppBaseController as InfyOmBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use App\Models\Pessoa;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PessoaController extends InfyOmBaseController
{
    /** @var  PessoaRepository */
    private $pessoaRepository;

    public function __construct(PessoaRepository $pessoaRepo)
    {
        $this->pessoaRepository = $pessoaRepo;
    }

    /**
     * Display a listing of the Pessoa.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {

        $this->pessoaRepository->pushCriteria(new RequestCriteria($request));
        $pessoas = $this->pessoaRepository->all();
        return view('admin.pessoas.index')
            ->with('pessoas', $pessoas);
    }

    /**
     * Show the form for creating a new Pessoa.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.pessoas.create');
    }

    /**
     * Store a newly created Pessoa in storage.
     *
     * @param CreatePessoaRequest $request
     *
     * @return Response
     */
    public function store(CreatePessoaRequest $request)
    {
        $input = $request->all();

        $pessoa = $this->pessoaRepository->create($input);

        Flash::success('Pessoa saved successfully.');

        return redirect(route('admin.pessoas.index'));
    }

    /**
     * Display the specified Pessoa.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $pessoa = $this->pessoaRepository->findWithoutFail($id);

        if (empty($pessoa)) {
            Flash::error('Pessoa not found');

            return redirect(route('pessoas.index'));
        }

        return view('admin.pessoas.show')->with('pessoa', $pessoa);
    }

    /**
     * Show the form for editing the specified Pessoa.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $pessoa = $this->pessoaRepository->findWithoutFail($id);

        if (empty($pessoa)) {
            Flash::error('Pessoa not found');

            return redirect(route('pessoas.index'));
        }

        return view('admin.pessoas.edit')->with('pessoa', $pessoa);
    }

    /**
     * Update the specified Pessoa in storage.
     *
     * @param  int              $id
     * @param UpdatePessoaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePessoaRequest $request)
    {
        $pessoa = $this->pessoaRepository->findWithoutFail($id);

        

        if (empty($pessoa)) {
            Flash::error('Pessoa not found');

            return redirect(route('pessoas.index'));
        }

        $pessoa = $this->pessoaRepository->update($request->all(), $id);

        Flash::success('Pessoa updated successfully.');

        return redirect(route('admin.pessoas.index'));
    }

    /**
     * Remove the specified Pessoa from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
      public function getModalDelete($id = null)
      {
          $error = '';
          $model = '';
          $confirm_route =  route('admin.pessoas.delete',['id'=>$id]);
          return View('admin.layouts/modal_confirmation', compact('error','model', 'confirm_route'));

      }

       public function getDelete($id = null)
       {
           $sample = Pessoa::destroy($id);

           // Redirect to the group management page
           return redirect(route('admin.pessoas.index'))->with('success', Lang::get('message.success.delete'));

       }

}
