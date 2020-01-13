<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Requests\CreateLivroRequest;
use App\Http\Requests\UpdateLivroRequest;
use App\Repositories\LivroRepository;
use App\Http\Controllers\AppBaseController as InfyOmBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use App\Models\Livro;
use App\Models\Editora;
use App\Models\Tipos;
use App\Models\Autor;
use App\Models\Classificacao;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class LivroController extends InfyOmBaseController
{
    /** @var  LivroRepository */
    private $livroRepository;

    public function __construct(LivroRepository $livroRepo)
    {
        $this->livroRepository = $livroRepo;
    }

    /**
     * Display a listing of the Livro.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {

        $this->livroRepository->pushCriteria(new RequestCriteria($request));
        $livros = $this->livroRepository->all();
        return view('admin.livros.index')
            ->with('livros', $livros);
    }

    /**
     * Show the form for creating a new Livro.
     *
     * @return Response
     */
    public function create()
    {

        $editoras = Editora::all();
        $autores = Autor::all();
        $tipos = Tipos::all();
        $classificacoes = Classificacao::all();

        return view('admin.livros.create', [
            'editoras' => $editoras,
            'autores' => $autores,
            'tipos' => $tipos,
            'classificacoes' => $classificacoes
        ]);
    }

    /**
     * Store a newly created Livro in storage.
     *
     * @param CreateLivroRequest $request
     *
     * @return Response
     */
    public function store(CreateLivroRequest $request)
    {
        $input = $request->all();

        $livro = $this->livroRepository->create($input);

        Flash::success('Livro cadastrado com sucesso.');

        return redirect(route('admin.livros.index'));
    }

    /**
     * Display the specified Livro.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $livro = $this->livroRepository->findWithoutFail($id);

        if (empty($livro)) {
            Flash::error('Livro não encontrado.');

            return redirect(route('livros.index'));
        }

        return view('admin.livros.show')->with('livro', $livro);
    }

    /**
     * Show the form for editing the specified Livro.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $livro = $this->livroRepository->findWithoutFail($id);
        $editoras = Editora::all();
        $autores = Autor::all();
        $tipos = Tipos::all();
        $classificacoes = Classificacao::all();

        if (empty($livro)) {
            Flash::error('Livro não encontrado');

            return redirect(route('livros.index'));
        }

        return view('admin.livros.edit', [
            'livro' => $livro,
            'editoras' => $editoras,
            'autores' => $autores,
            'tipos' => $tipos,
            'classificacoes' => $classificacoes
        ]);
    }

    /**
     * Update the specified Livro in storage.
     *
     * @param  int              $id
     * @param UpdateLivroRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLivroRequest $request)
    {
        $livro = $this->livroRepository->findWithoutFail($id);



        if (empty($livro)) {
            Flash::error('Livro não encontrado');

            return redirect(route('livros.index'));
        }

        $livro = $this->livroRepository->update($request->all(), $id);

        Flash::success('Livro atualizado com sucesso.');

        return redirect(route('admin.livros.index'));
    }

    /**
     * Remove the specified Livro from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
      public function getModalDelete($id = null)
      {
          $error = '';
          $model = '';
          $confirm_route =  route('admin.livros.delete',['id'=>$id]);
          return View('admin.layouts/modal_confirmation', compact('error','model', 'confirm_route'));

      }

       public function getDelete($id = null)
       {
           $sample = Livro::destroy($id);

           // Redirect to the group management page
           return redirect(route('admin.livros.index'))->with('success', Lang::get('message.success.delete'));

       }

}
