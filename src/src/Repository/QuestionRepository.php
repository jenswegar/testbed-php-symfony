<?php

namespace App\Repository;

use App\Entity\Question;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Question|null find($id, $lockMode = null, $lockVersion = null)
 * @method Question|null findOneBy(array $criteria, array $orderBy = null)
 * @method Question[]    findAll()
 * @method Question[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class QuestionRepository extends ServiceEntityRepository
{
  public function __construct(ManagerRegistry $registry)
  {
    parent::__construct($registry, Question::class);
  }

  public function save(Question $question): Question
  {
    $this->getEntityManager()->persist($question);
    $this->getEntityManager()->flush();
    return $question;
  }

  public function remove(Question $question): void
  {
    $this->getEntityManager()->remove($question);
    $this->getEntityManager()->flush();
  }

  public function findRandom(): ?Question
  {
    $c = $this->count([]);

    return $this->createQueryBuilder('q')
      ->setMaxResults(1)
      // zero based offsets
      ->setFirstResult(rand(0, $c-1))
      ->getQuery()
      ->getOneOrNullResult();
  }

  // /**
  //  * @return Question[] Returns an array of Question objects
  //  */
  /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('q')
            ->andWhere('q.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('q.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

  /*
    public function findOneBySomeField($value): ?Question
    {
        return $this->createQueryBuilder('q')
            ->andWhere('q.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
