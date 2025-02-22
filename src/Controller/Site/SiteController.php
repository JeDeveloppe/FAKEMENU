<?php

namespace App\Controller\Site;

use App\Repository\CategoryRepository;
use App\Service\LegalInformationsService;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\LegalInformationsRepository;
use App\Service\QrCodeService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

final class SiteController extends AbstractController
{
    public function __construct(
        private CategoryRepository $categoryRepository,
        private LegalInformationsRepository $legalInformationsRepository,
        private LegalInformationsService $legalInformationsService,
        private QrCodeService $qrCodeService
    ) {}

    #[Route('/', name: 'site_home')]
    public function index(Request $request): Response
    {
        $categories = $this->categoryRepository->findAll();
        $legales = $this->legalInformationsRepository->findOneBy([]);

        $photos = [];
        $photos[] = [
            'link' => "jason-leung-O67LZfeyYBk-unsplash",
            'alt' => "bifteck-tranche-mi-saignant-dans-une-assiette-en-ceramique-blanche-O67LZfeyYBk",
            'authorLink' => 'Photo de <a target="_blank" href="https://unsplash.com/fr/@ninjason?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash">Jason Leung</a> sur <a target="_blank" href="https://unsplash.com/fr/photos/bifteck-tranche-mi-saignant-dans-une-assiette-en-ceramique-blanche-O67LZfeyYBk?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash">Unsplash</a>'
        ];
        $photos[] = [
            'link' => "sebastian-coman-photography-Co-T6odt0es-unsplash",
            'alt' => "pain-tranche-sur-assiette-en-ceramique-blanche-Co-T6odt0es",
            'authorLink' => 'Photo de <a target="_blank" href="https://unsplash.com/fr/@sebastiancoman?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash">Sebastian Coman Photography</a> sur <a target="_blank" href="https://unsplash.com/fr/photos/pain-tranche-sur-assiette-en-ceramique-blanche-Co-T6odt0es?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash">Unsplash</a>'
        ];
        $photos[] = [
            'link' => "natalia-rudisuli-Ijp5eB0bv5E-unsplash",
            'alt' => "un-plateau-de-fromage-et-de-craquelins-sur-une-table-Ijp5eB0bv5E",
            'authorLink' => 'Photo de <a target="_blank" href="https://unsplash.com/fr/@nruedisueli?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash">Natalia Rüdisüli</a> sur <a target="_blank" href="https://unsplash.com/fr/photos/un-plateau-de-fromage-et-de-craquelins-sur-une-table-Ijp5eB0bv5E?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash">Unsplash</a>'
        ];  

        $baseurl = $request->getScheme() . '://' . $request->getHttpHost() . $request->getBasePath();
        $qrCode = $this->qrCodeService->generateQrCodeWithLogo('https://www.url.com');
        $qrCodeImage = $qrCode->getContent();

        return $this->render('site/home/index.html.twig', [
            'title' => 'FAKE MENU',
            'categories' => $categories,
            'legales' => $legales,
            'photos' => $photos,
            'qrCodeImage' => $qrCodeImage
        ]);
    }

    #[Route('/notre-carte', name: 'site_carte')]
    public function carte(): Response
    {
        $categories = $this->categoryRepository->findAll();
        $legales = $this->legalInformationsRepository->findOneBy([]);

        return $this->render('site/carte/carte.html.twig', [
            'title' => 'FAKE MENU',
            'categories' => $categories,
            'legales' => $legales
        ]);
    }

    #[Route('/mentions-legales', name: 'site_mentions_legales')]
    public function mentionsLegales(): Response
    {
        $legales = $this->legalInformationsRepository->findOneBy([]);
        $paragraphs = $this->legalInformationsService->mentionsParagraphs($legales);

        return $this->render('site/legale/mentions_legales.html.twig', [
            'title' => 'Mentions-legales',
            'legales' => $legales,
            'paragraphs' => $paragraphs
        ]);
    }
}
